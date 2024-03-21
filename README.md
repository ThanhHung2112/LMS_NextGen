# LMSNextGen
LMSNextGen is an LMS system integrated with AI features. This repository follows the structured approach outlined by **DEHA Company** and encompasses three key functionalities:

1. **Recommendation System:**
   - Feature dedicated to providing personalized recommendations based on user preferences and behavior.
2. **Auto-Generated and Auto-Graded Assignments:**
   - Streamlined functionality allowing automatic generation and grading of assignments using uploaded documentation.
3. **Grammar Error Correction and Grading English Writing Tasks:**
   - Incorporates capabilities for identifying and correcting grammar errors, along with grading English writing tasks based on the CEFR (Common European Framework of Reference for Languages) level.

This project aims to offer a comprehensive Learning Management System (LMS) with a focus on user-friendly features and efficient task management.

## Demo Project

Click on to watch video below 👇🏻

[![Watch the video](https://img.youtube.com/vi/d5GoHRTfkoI/maxresdefault.jpg)](https://www.youtube.com/watch?v=d5GoHRTfkoI)

## Technology Stack

1. Backend and Frontend: **Moodle**
   - Moodle serves as the backend and frontend for the LMS, handling course management, user authentication, and providing an intuitive interface for users.
   
2. API Design and Integration: **Flask**
   - Flask is used to design and implement APIs for integrating AI features into the LMS. These APIs facilitate communication between the AI modules and the Moodle system, allowing seamless integration of recommendation systems, assignment generation, and grammar error correction functionalities.

3. AI Mretrained Models:
   - **T5 Transformer**: Utilized for natural language processing tasks such as text generation and grammar error correction.
   - **BERT (Bidirectional Encoder Representations from Transformers)**: Used for tasks such as text classification and language understanding.

<p align="center">
     <br>
     <img src="https://github.com/ThanhHung2112/LMS/blob/main/img_for_readme/system_design.png?raw=true"/>
     <br/>
</p>

## Installatioin

### 1. Install Moodle

Access [Moodle](https://download.moodle.org/releases/supported/) and download version 4.1.6.

**Database requiements:**
- MariaDB>=10.6.7
- MySQL>=8.0
- Postgres==13
- Oracle=19c
  




For detailed installation instructions, please refer to [this guide](https://docs.google.com/document/d/1-6CWZIH3tAfjefyjPojpbRn2zMGBLLKlyr0pNBjxgoY/edit?fbclid=IwAR3qhrwKdev-F_k2IrBirUCMVWfyNd0OuHjH4xyeFK3cbJIDaehIUGUdClU).

   <p align="center">
     <br>
     <img src="https://github.com/ThanhHung2112/LMS/blob/main/img_for_readme/recommendation_system.png?raw=true"/>
     <br/>
   </p>
      <p align="center">
     <br>
     <img src="https://github.com/ThanhHung2112/LMS/blob/main/img_for_readme/Auto-Generated_and_Auto-Graded_Assignments.png?raw=true"/>
     <br/>
   </p>
   <p align="center">
     <br>
     <img src="https://github.com/ThanhHung2112/LMS/blob/main/img_for_readme/CEFR.png?raw=true"/>
     <br/>
   </p>
