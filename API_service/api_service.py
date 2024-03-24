from flask import Flask, render_template, request, redirect, url_for, flash, jsonify
from flask_sqlalchemy import SQLAlchemy
import torch
import sys
import pandas as pd
import difflib
import random
import string
import enchant
import torch.nn as nn
import numpy as np
from transformers import T5ForConditionalGeneration, T5Tokenizer, BertTokenizer, BertModel, AutoTokenizer, RobertaForSequenceClassification

from nltk.corpus import stopwords
from sklearn.neighbors import NearestNeighbors
from sklearn.metrics.pairwise import cosine_similarity
import json
import re
from sqlalchemy.dialects.mysql import LONGTEXT
import textract
from mlxtend.frequent_patterns import apriori, association_rules
import en_core_web_sm
spc_en = en_core_web_sm.load()



app = Flask(__name__)
app.secret_key = "Secret Key"


# DEF Recommend khóa học

course = pd.read_csv("archive/course.csv")
history = pd.read_csv("archive/history.csv", encoding='latin-1')
data = list(history['History_course_id'].apply(lambda x:x.split(",") ))

from mlxtend.preprocessing import TransactionEncoder
a = TransactionEncoder()
a_data = a.fit(data).transform(data)
df = pd.DataFrame(a_data,columns=a.columns_)
df = df.replace(False,0)
df2 = df
apriori_t = apriori(df2, min_support = 0.01, use_colnames = True, verbose = 1)
df_ar = association_rules(apriori_t, metric = "confidence", min_threshold = 0.6)
result = course.loc[course['Course_id'] == 1289]['Course Name']

for n, antecedents in enumerate(df_ar['antecedents']):
    if isinstance(antecedents, frozenset):
        antecedents = list(antecedents)
    antecedent_ids = ','.join(map(str, antecedents)).strip()  # Chuyển thành danh sách và tách các ID

    antecedent_names = []
    for antecedent_id in antecedent_ids.split(','):
        antecedent_id = antecedent_id.strip()
        result = course.loc[course['Course_id'] == int(antecedent_id)]['Course Name'].iloc[0]
        antecedent_names.append(result)

    antecedent_names_str = ', '.join(antecedent_names)


    consequents = df_ar['consequents'][n]
    if isinstance(consequents, frozenset):
        consequents = list(consequents)
    consequent_ids = ','.join(map(str, consequents)).strip()  # Chuyển thành danh sách và tách các ID

    consequent_names = []
    for consequent_id in consequent_ids.split(','):
        consequent_id = consequent_id.strip()
        result = course.loc[course['Course_id'] == int(consequent_id)]['Course Name'].iloc[0]
        consequent_names.append(result)

    consequent_names_str = ', '.join(consequent_names)

def preprocess_text(text):
    stopwords_eng = stopwords.words("english")
    text = text.lower()
    text = text.replace(",", "").replace(".", "").replace("!", "").replace("?", "")
    text = re.sub(r"[\W\d_]+", " ", text)
    text = [pal for pal in text.split() if pal not in stopwords_eng]
    spc_text = spc_en(" ".join(text))
    tokens = [word.lemma_ if word.lemma_ != "-PRON-" else word.lower_ for word in spc_text]
    return " ".join(tokens)

def cosine_similarity(vector1, vector2):
    # Chuyển đổi các vector cột thành vector hàng
    vector1 = vector1.reshape(1, -1)
    vector2 = vector2.reshape(1, -1)
    
    dot_product = np.dot(vector1, vector2.T)  # Sử dụng vector thứ hai chuyển vị
    norm1 = np.linalg.norm(vector1)
    norm2 = np.linalg.norm(vector2)
    similarity = dot_product / (norm1 * norm2)
    return similarity[0, 0]

def euclidean_distance(vector1, vector2):
    # Tính hiệu của hai vector
    diff = vector1 - vector2
    
    # Tính khoảng cách Euclidean bằng cách tính norm của hiệu
    distance = np.linalg.norm(diff)
    return distance

# Hàm mã hoá câu với BERT
tokenizer = BertTokenizer.from_pretrained("bert-base-uncased")
model = BertModel.from_pretrained("bert-base-uncased")

def encode_sequence_with_bert(sequence):
    # Tiền xử lý và mã hoá câu
    input_ids = tokenizer(preprocess_text(sequence), return_tensors="pt").input_ids
    with torch.no_grad():
        outputs = model(input_ids)
        hidden_states = outputs.last_hidden_state.mean(dim=1).squeeze().numpy()

    return hidden_states

def nearest_bert(new_sentence):
    # Tiền xử lý và mã hoá câu mới với BERT
    encoded_new_sentence = encode_sequence_with_bert(new_sentence)

    # Chuyển đổi chuỗi số thực từ cột BERT_Encoded thành ma trận 2D
    bert_encoded_matrix = course['BERT_Encoded'].apply(lambda x: np.fromstring(x[1:-1], sep=' '))
    bert_encoded_matrix = np.vstack(bert_encoded_matrix)

    # Tạo mô hình KNN với k=5 (tìm 5 câu giống nhất)
    knn_model = NearestNeighbors(n_neighbors=5, metric='cosine')
    knn_model.fit(bert_encoded_matrix)

    # Tìm 5 câu giống với câu mới nhất trong BERT_Encoded
    nearest_neighbors = knn_model.kneighbors([encoded_new_sentence], n_neighbors=5)

    for i, neighbor_index in enumerate(nearest_neighbors[1][0]):
        neighbor_sequence = course.at[neighbor_index, "Course Name"]
        neighbor_specialized = course.at[neighbor_index, "Specialized"]


vec1 = course[course["Course_id"] == 4]["IDF"]
vec1 = course[course["Course_id"] == 4]["IDF"]

# cosine_similarityfrom sklearn.neighbors import NearestNeighbors
import pandas as pd
import numpy as np

# Đọc dữ liệu khoá học
course = pd.read_csv("archive/course.csv", index_col=0)

# Load cột IDF đã mã hoá
idf_encoded_matrix = course["BERT_Encoded"].apply(lambda x: np.fromstring(x[1:-1], sep=' '))
idf_encoded_matrix = np.vstack(idf_encoded_matrix)

# Tạo mô hình KNN với k=5 (tìm 5 khoá gần nhất)
knn_model = NearestNeighbors(n_neighbors=5, metric='cosine')
knn_model.fit(idf_encoded_matrix)

def find_nearest_courses(course_id, num):
    # Tìm vector IDF của khoá học cụ thể
    course_index = course[course["Course_id"] == course_id].index[0]
    course_idf_vector = idf_encoded_matrix[course_index]

    # Tìm 5 khoá gần nhất với khoá học cụ thể
    nearest_neighbors = knn_model.kneighbors([course_idf_vector], n_neighbors=num)

    # print(f"Course ID: {course_id}")
    # print("\nNearest Courses:")
    
    recommended_course_ids = []
    for i, neighbor_index in enumerate(nearest_neighbors[1][0]):
        neighbor_course_id = course.at[neighbor_index, "Course_id"]
        recommended_course_ids.append(neighbor_course_id)
        neighbor_course_name = course.at[neighbor_index, "Course Name"]
        # print(f"Neighbor {i + 1}: Course ID {neighbor_course_id} -- {neighbor_course_name}")

    return recommended_course_ids

def recommend_courses(enrolled_courses, df_ar, num_recommendations=5):

    recommended_courses = []

    for index, row in df_ar.iterrows():
        antecedents = row['antecedents']
        consequents = row['consequents']

        antecedents_cleaned = [str(course_id).replace(" ", "") for course_id in antecedents]

        if any(course_id in antecedents_cleaned for course_id in enrolled_courses):
            recommended_courses.extend(consequents)

    recommended_courses = [str(course_id).replace(" ", "") for course_id in recommended_courses]
    recommended_courses = list(set(recommended_courses) - set(enrolled_courses))

    if len(recommended_courses) > num_recommendations:
        recommended_courses = recommended_courses[:num_recommendations]
    if len(recommended_courses) < num_recommendations:
        
        num_to_find = (num_recommendations - len(recommended_courses)) / (len(recommended_courses)-0.1)
        re = []
        for course_id in recommended_courses:
            nearest_courses = find_nearest_courses(int(course_id), 5)
            for i,course in enumerate(nearest_courses):
                if course not in enrolled_courses and course not in recommended_courses and int(course) != int(course_id):
                    re.append(course)
                
                if len(re) + 1 >= round(num_to_find)*(i+1):
                    break

    # recommended_courses = list(set(recommended_courses) - set(enrolled_courses) - set(re))
    [recommended_courses.append(i)for i in set(re)]

    # if len(recommended_courses) > num_recommendations:
    #     recommended_courses = recommended_courses[:num_recommendations]

    return recommended_courses





def zip4id(id):
    stringid = str(id)    
    if len(stringid) < 4:
        stringid = '0' * (4 - len(stringid)) + stringid
    return stringid


# Hàm Grammar correct

ro_model = RobertaForSequenceClassification.from_pretrained(
    "CEFR/cefr999_model",
    num_labels=6
)
device_ro = torch.device("cuda" if torch.cuda.is_available() else "cpu")
ro_model.to(device_ro)
ro_tokenizer = AutoTokenizer.from_pretrained("CEFR/cefr999_token")

def predict_english_level(text):
    # Encode the text using the tokenizer
    inputs = ro_tokenizer(
        text,
        padding="max_length",
        max_length=512,
        truncation=True,
        return_tensors="pt"
    )
    input_ids = inputs["input_ids"].squeeze()
    attention_mask = inputs["attention_mask"].squeeze()

    # Make a prediction
    with torch.no_grad():
        input_ids = input_ids.to(device_ro)
        attention_mask = attention_mask.to(device_ro)
        output = ro_model(input_ids=input_ids.unsqueeze(0), attention_mask=attention_mask.unsqueeze(0))
        predicted_class = output.logits.argmax().item()

    # Map the predicted class back to the English level
    labels = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2']
    predicted_level = labels[predicted_class]

    return predicted_level

model_name = 'gec_03'
# model_name = 't5_gec_model_02' # model path
torch_device = 'cuda' if torch.cuda.is_available() else 'cpu'
g_tokenizer = T5Tokenizer.from_pretrained(model_name)
g_model = T5ForConditionalGeneration.from_pretrained(model_name).to(torch_device)

def correct_grammar(input_text,num_return_sequences):
  batch = g_tokenizer([input_text],truncation=True,padding='max_length',max_length=128, return_tensors="pt").to(torch_device)
  translated = g_model.generate(**batch,max_length=128,num_beams=3, num_return_sequences=num_return_sequences, temperature=1.5)
  tgt_text = g_tokenizer.batch_decode(translated, skip_special_tokens=True)
  return tgt_text

def correct_and_merge(input_text, num_return_sequences):
    sentences = re.split(r'[.!?\n]', input_text)
    corrected_sentences = []

    for sentence in sentences:
        words = sentence.split()
        if len(words) > 3:
            corrected_versions = correct_grammar(sentence, num_return_sequences=num_return_sequences)
            corrected_sentences.extend(corrected_versions)
        else:
            corrected_sentences.append(sentence)
    corrected_texts = []
    for i in range(num_return_sequences):

        corrected_texts.append(' '.join(corrected_sentences[i::num_return_sequences]))

    return corrected_texts

dictionary = enchant.Dict("en_US")

def spell_checker(sentence):
    words = sentence.split()
    corrected_sentence = []

    corrections = {}

    for word in words:
        original_word = word.strip(string.punctuation)

        if not original_word:
            corrected_sentence.append(word)  # Skip empty words
        elif not dictionary.check(original_word):
            suggestions = dictionary.suggest(original_word)
            if suggestions:
                corrected_word = suggestions[0]  # Use the first suggestion
                corrections[original_word] = corrected_word
                corrected_sentence.append(word.replace(original_word, corrected_word))
            else:
                corrected_sentence.append(word)
        else:
            corrected_sentence.append(word)

    corrected_text = ' '.join(corrected_sentence)
    return corrected_text, corrections

def highlight(correct_sentence, error_Sentence):
    differ = difflib.Differ()
    diff = list(differ.compare(correct_sentence.split(), error_Sentence.split()))

    highlighted_diff = []
    for word in diff:
        if word.startswith(' '):
            highlighted_diff.append(word[2:])
        elif word.startswith('- '):
            highlighted_diff.append('<span class="ml-error-word">{}</span>'.format(word[2:]))
    
    highlighted_sentence = ' '.join(highlighted_diff)

    return highlighted_sentence

model_name = "bert-base-uncased"
tense_model = BertModel.from_pretrained(model_name)
tense_tokenizer = AutoTokenizer.from_pretrained("tense_model/tense_tokenizer")

class TenseClassifier(nn.Module):
  
    def __init__(self, bert_model, num_classes):
        super(TenseClassifier, self).__init__()
        self.bert = bert_model
        self.relu1 = nn.ReLU()
        self.relu2 = nn.ReLU()
        self.fc = nn.Linear(self.bert.config.hidden_size, num_classes)

    def forward(self, input_ids, attention_mask):
        outputs = self.bert(input_ids, attention_mask=attention_mask)
        pooled_output = outputs.last_hidden_state[:, 0, :]
        x = self.relu1(pooled_output)
        x = self.relu2(x)
        logits = self.fc(x)
        return logits

model_path_tense = "tense_model/tense.pt"
tense_model = TenseClassifier(tense_model, num_classes=12)

tense_model.load_state_dict(torch.load(model_path_tense, map_location=torch.device('cpu')), strict=False)

tense_labels = {
    'present simple': 0,
    'future simple': 1,
    'past simple': 2,
    'present perfect continuous': 3,
    'future perfect': 4,
    'past perfect': 5,
    'future continuous': 6,
    'past perfect continuous': 7,
    'present continuous': 8,
    'past continuous': 9,
    'future perfect continuous': 10,
    'present perfect': 11,
}
def predict_tense(sentence, model, tokenizer, tense_labels):
    # tokenizer
    encoded_sentence = tokenizer(sentence, padding=True, truncation=True, return_tensors="pt")
    
    with torch.no_grad():
        logits = model(encoded_sentence['input_ids'], encoded_sentence['attention_mask'])
        predicted_label = torch.argmax(logits, dim=1).item()
    
    predicted_tense = [k for k, v in tense_labels.items() if v == predicted_label][0]
    
    return predicted_tense

def identify_error_types(paragraph, corrected_paragraph, corrected_words):
    differ = difflib.Differ()
    
    list_wrong_grammar_sentences = []
    list_wrong_spell_sentences = []
    
    for orig_sentence, corr_sentence in zip(paragraph, corrected_paragraph):
        diff = list(differ.compare(orig_sentence.split(), corr_sentence.split()))
        
        grammar_errors = []
        spelling_errors = []

        for word_diff in diff:
            word = word_diff[2:]
            
            if word_diff.startswith('- '): 
                if word in corrected_words:
                    spelling_errors.append(word)
                else:
                    grammar_errors.append(word)

        if grammar_errors:
            list_wrong_grammar_sentences.append(orig_sentence)
        elif spelling_errors and not grammar_errors:
            list_wrong_spell_sentences.append(orig_sentence)
    
    return list_wrong_grammar_sentences, list_wrong_spell_sentences



#DEF question-gen:

model_name = "t5-small"
tokenizer = T5Tokenizer.from_pretrained(model_name)
model = T5ForConditionalGeneration.from_pretrained(model_name)

def summarize_file(filepath):
    text = textract.process(filepath, encoding='utf-8')
    # Sử dụng biểu thức chính quy để cắt thành các đoạn văn
    all_paragraphs = re.split(r'\s{2,}', text.decode('utf-8'))
    num_paragraph= len(text)
    list_para = []
    list_para = [para for para in all_paragraphs if len(para.split()) >= 20] # list of paragraphs which have more than 20 words
    summaries = []
    for i,paragraph in enumerate(list_para):
        input_text = "summarize: " + paragraph
        input_ids = tokenizer.encode(input_text, return_tensors="pt", max_length=1024, truncation=True)
        summary_ids = model.generate(input_ids, max_length=150, min_length=50, length_penalty=2.0, num_beams=4, early_stopping=True)
        summary = tokenizer.decode(summary_ids[0], skip_special_tokens=True)
        summaries.append(summary)

    result = [{"paragraph": list_para[i], "summary": summaries[i]} for i in range(len(summaries))]
    return result


sys.path.insert(1, 'question_generator')
from questiongenerator import QuestionGenerator
qg = QuestionGenerator()

def new_question(result):
    pick_summ = len(result)
    summ_cal = random.sample(range(pick_summ), 3)
    question = []
    summ_res = []
    for i in range(len(summ_cal)):
        text = result[summ_cal[i]]["summary"]
        summ_res.append(text)
        q  = qg.generate(text, num_questions=1)
        question.append(q)
    return question, summ_res


# DEF Fact-check
class BERTClassificationModel(nn.Module):
    def __init__(self, bert_model_name, num_labels):
        super(BERTClassificationModel, self).__init__()
        self.bert = BertModel.from_pretrained(bert_model_name)
        self.dropout = nn.Dropout(0.1)
        self.classifier = nn.Linear(self.bert.config.hidden_size * 2, num_labels)

    def forward(self, input_ids, attention_mask):
        outputs = self.bert(input_ids=input_ids, attention_mask=attention_mask)
        pooled_output = torch.cat((outputs.last_hidden_state[:, 0, :], outputs.last_hidden_state[:, -1, :]), dim=1)
        pooled_output = self.dropout(pooled_output)
        logits = self.classifier(pooled_output)
        return logits

device_fc = torch.device("cpu")

model_path_bert = "bert_classification_model.pth"
# Tạo mô hình mới
loaded_model = BERTClassificationModel('bert-base-uncased', num_labels=3)

if torch.cuda.is_available():
    loaded_model.load_state_dict(torch.load(model_path_bert))
else:
    loaded_model.load_state_dict(torch.load(model_path_bert, map_location=torch.device('cpu')), strict=False)
    
loaded_tokenizer = BertTokenizer.from_pretrained("tokenizer")

max_seq_length = 128
def predict_premise_hypothesis(premise_text, hypothesis_text, model, tokenizer):
    # Chuẩn bị dữ liệu đầu vào cho mô hình
    inputs = tokenizer(premise_text, hypothesis_text, padding=True, truncation=True, max_length=max_seq_length, return_tensors="pt")
    input_ids = inputs["input_ids"].to(device_fc)
    attention_mask = inputs["attention_mask"].to(device_fc)

    # Dự đoán
    model.eval()
    with torch.no_grad():
        logits = model(input_ids, attention_mask)
        probabilities = torch.softmax(logits, dim=1)
        predicted_label = torch.argmax(probabilities, dim=1).item()

    return predicted_label

pre = ["entailment", "neutral", "contradiction"]



@app.route('/questions-generate', methods=['POST'])
def process_uploaded_file():
    # Nhận đường dẫn của file
    data = request.get_json()
    uploaded_file_path = data['uploaded_file_path']
    summ = summarize_file(uploaded_file_path)
    question, summ_res = new_question(summ)
    result = []
    for i in range(len(question)):
        dictq = {}
        dictq['id'] = i+1
        for j in range(len(question[i])):
            dictq['question'] = question[i][j]['question']
            dictq['answer'] = question[i][j]['answer']
        result.append(dictq)   
    summ_result = []
    for i in range(len(summ_res)):
        dicts = {}
        dicts['id'] = i+1
        dicts['summarize'] = summ_res[i]
        summ_result.append(dicts)      
    # thêm record vào csdl
    return jsonify({'summarize_texts': summ_result, 'questions_generated': result})

@app.route('/recommend-course', methods=['POST'])
def apriori():
    data = request.get_json()

    if data is not None:
        print("json:",data)
        enrolled = []
        course_target = []
        for item in data:
            item = str(item)
            itemstr = zip4id(item)
            enrolled.append(itemstr)
        print("list:", enrolled)
        recommend = recommend_courses(enrolled, df_ar)
        course_dict = dict(zip(course['Course_id'], course['Course Name']))
        for course_id in enrolled:
            clean_course_id = course_id.replace(" ", "")
            course_name = course_dict.get(clean_course_id, 'Not Found')
        for course_id in recommend:
            clean_course_id = str(course_id).replace(" ", "")
            course_name = course_dict.get(clean_course_id, 'Not Found')
            if clean_course_id not in enrolled:
                target = int(clean_course_id)
                course_target.append(target)
        print(course_target)
        return jsonify({'recommended_list':course_target})
    else:
        return jsonify({'Error': 'Request Failed UwU'})
    
@app.route('/grammar-analysis', methods=['POST'])
def grammar_corr():
    data = request.get_json()
    sentence = data['student_answer']
    level = predict_english_level(sentence)
    spell_check, corrections = spell_checker(sentence)
    corrected_texts = correct_and_merge(spell_check, 2)
    corrected_result = []
    for i in range(len(corrected_texts)):
        dictc = {}
        dictc['id'] = i+1
        dictc['corrected_text'] = corrected_texts[i]
        corrected_result.append(dictc) 
    spell_result = []
    for i in range(len(corrections)):
        dictsp = {}
        dictsp['wrong'] = list(corrections.keys())[i]
        dictsp['correct'] = list(corrections.values())[i]
        spell_result.append(dictsp)
    wrong_grammar, wrong_spelling = identify_error_types(corrected_texts[0].split('.'), sentence.split('.'), corrections)
    grammar_result = []
    w_tense = []
    for sentence_wr in wrong_grammar:
        w_tense.append(predict_tense(sentence_wr, tense_model, tense_tokenizer, tense_labels))
    print(wrong_grammar)
    for i in range(len(wrong_grammar)):
        dictgr = {}
        dictgr['sentence'] = wrong_grammar[i]
        dictgr['tense'] = w_tense[i]
        grammar_result.append(dictgr)
   
    return jsonify({'student_answer':sentence, 'predicted_level': level, 'corrected_texts': corrected_result, 'spell_check':spell_result, 'grammar_check': grammar_result})

@app.route('/check-legit-answer', methods=['POST'])
def fact_check():
    data = request.get_json()
    student_answer = data['student_answer']
    summarize = data['summarize']
    predicted_label = predict_premise_hypothesis(student_answer, summarize, loaded_model, loaded_tokenizer)
    return jsonify({'label': pre[predicted_label]})

if __name__ == "__main__":
    app.run(debug= True)

    