# LMSNextGen
LMSNextGen is an LMS system integrated with AI features. This repository follows the structured approach outlined by **DEHA Company** and encompasses three key functionalities:

1. **Recommendation System:**
   - Feature dedicated to providing personalized recommendations based on user preferences and behavior.
2. **Auto-Generated and Auto-Graded Assignments:**
   - Streamlined functionality allowing automatic generation and grading of assignments using uploaded documentation.
3. **Grammar Error Correction and Grading English Writing Tasks:**
   - Incorporates capabilities for identifying and correcting grammar errors, along with grading English writing tasks based on the CEFR (Common European Framework of Reference for Languages) level.

This project aims to offer a comprehensive Learning Management System (LMS) with a focus on user-friendly features and efficient task management.

# Features

1. Recommend couses based on enrolled course and course skills.
2. Automatic generation of assignments from documentation files (PDF, DOC, DOCX, TXT).
3. Automated assignment grading.
4. Grammar error correction.
5. Tenses prediction.
6. CEFR levels prediction.

# Demo Project

Watch the demo video by clicking on the image below 👇🏻

[![Watch the video](https://img.youtube.com/vi/d5GoHRTfkoI/maxresdefault.jpg)](https://www.youtube.com/watch?v=d5GoHRTfkoI)

# Technology Stack

1. Backend and Frontend: **Moodle**
   - Moodle serves as the backend and frontend for the LMS, handling course management, user authentication, and providing an intuitive interface for users.
   
2. API Design and Integration: **Flask**
   - Flask is used to design and implement APIs for integrating AI features into the LMS. These APIs facilitate communication between the AI modules and the Moodle system, allowing seamless integration of recommendation systems, assignment generation, and grammar error correction functionalities.

3. Pretrained Models:
   - **T5 Transformer**: Utilized for natural language processing tasks such as text generation and grammar error correction.
   - **BERT (Bidirectional Encoder Representations from Transformers)**: Used for tasks such as text classification and language understanding.

<p align="center">
     <br>
     <img src="https://github.com/ThanhHung2112/LMS/blob/main/img_for_readme/system_design.png?raw=true"/>
     <br/>
</p>

# Installation

For detailed installation instructions, please refer to [this guide](https://docs.google.com/document/d/1-6CWZIH3tAfjefyjPojpbRn2zMGBLLKlyr0pNBjxgoY/edit?fbclid=IwAR3qhrwKdev-F_k2IrBirUCMVWfyNd0OuHjH4xyeFK3cbJIDaehIUGUdClU) (in vietnamese).

## Install Moodle

**Database requiements:**
- MariaDB>=10.6.7
- MySQL>=8.0
- Postgres==13
- Oracle=19c

1. Access [Moodle](https://download.moodle.org/releases/supported/) and download version 4.1.6.
2. After extract the downdload file, Run the file **Start Moodle.exe** in your folder.
3. Run XAMPP in the directory `server/xampp-control.exe`. You might get some error in when running Moodle. However, don't worry just follows the instruction of Moodle and Fix these error

## Moodle Error

In XAMPP GUI, Click on **Config** then select **config PHP (php.ini)**. Following the Moodle instruction and comment or uncomment the necessary library or extension.

![image](https://github.com/ThanhHung2112/LMS_AI/assets/73764342/309b3bb6-b60c-41e6-84fa-6b1e335c2dec)

## Implement AI Features

**1. Replace moodle fodler**

Replace `sever/moodle` folder in Moodle with this [**folder**](https://github.com/ThanhHung2112/LMS_AI/tree/main/Moodle_backend/server/moodle), note that you have to make sure that the folder name is **moodle** after replacing.

**2. Open Shell**

Run **xampp-control.exe** and open **Shell** in XAMPP GUI. Other terminal won work in this situation.

**3. To upgrade your database. Run the following commands.**

```bash
cd sever/moodle
php admin/cli/upgrade.php
```
**4. Migrate database**
Down load this [database.sql](https://drive.google.com/file/d/1MoqW56mVGOzqqDBIvO5lxoO4TcpMcRAy/view?usp=sharing)

Run the SQL file in the Moodle database that you have initialized during the initial setup.

For the convenience of demonstrating AI features, the developers have decided to create additional tables with the prefix "mdl_demo". Note: These tables have not been designed in a rigorous manner and may have some degree of redundancy. They are mainly used for quickly demoing AI features.

![image](https://github.com/ThanhHung2112/LMS_NextGen/assets/73764342/01c4c92e-b852-483b-9308-53eca72158fa)

**5. Clear cache**

To save changes to the Moodle system, it is necessary to clear the saved caches.

Select **Site admin** >> **Development** >> **Debugging**, then select option **DEVELOPER: extra Moodle debug messages for developers** in **Debug messages**

Finally, click on **Purge all caches** at the footer of the page

**6. API Service**

To set up the Python environment and necessary libraries to run this Flask application, you can follow the steps below:

Step 1: Install Python

First, you need to install Python on your computer. You can download Python from the official Python website (https://www.python.org/downloads/) and then install it following the instructions on the website.

Step 2: Download the directory containing the application models:

Download from the driver and unzip directly into the API_Service directory.
Link download: [pretrained model and sample training dataset](https://drive.google.com/drive/folders/1URsEiaf9a1dUTFdjetF386EmgAhD5PDU?usp=sharing)

Step 3: Install Python libraries

Launch cmd, then navigate to the directory containing the Flask application source code using the cd command:
cd <path to the directory where the application source code was downloaded>
to perform the following tasks:

Using pip, you can install the necessary Python libraries for the Flask project. You can create a Python virtual environment to manage the project's libraries. Open a command prompt and execute the following commands:

Create a Python virtual environment (recommended to avoid version conflicts)

python -m venv myenv

Activate the virtual environment (on Windows)

myenv\Scripts\activate

Install libraries from the requirements.txt file

pip install -r requirements.txt

Activate the virtual environment (if not activated already)

myenv\Scripts\activate

Run the Flask application

python api_service.py

After executing all the above commands, your terminal will display the address where the application is running. Use this address to route service processing for the Moodle LMS system.

After running this command, the API Service will start and be ready to operate on your computer


