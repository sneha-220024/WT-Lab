# Git Configuration Commands

## 1. git config --global user.name
Syntax:
git config --global user.name "Your Name"

Purpose:
To set username globally.

Example:
git config --global user.name "Sneha"

## 2. git config --global user.email
Syntax:
git config --global user.email "Your email"

Purpose:
To set username globally.

Example:
git config --global user.email "neha12@gmail.com"

## 3.git config --list
Syntax:
git config --list

Purpose:
displays all git configuration settingss

Example:
git config --list
Screenshot
<img width="1366" height="768" alt="Screenshot (22)" src="https://github.com/user-attachments/assets/b02f6ed7-1413-4e67-9580-c9ae28f54605" />
## 4. git config --list
Syntax:
git config --unset user.name

Purpose:
Removes a git configuration value

Example:
git config --unset user.name
Screenshot

<img width="1366" height="768" alt="Screenshot (23)" src="https://github.com/user-attachments/assets/7b586585-4380-47f2-8d08-a6d0cc6715d1" />

# Repositary setup commands

## 5.git init
Syntax:
git init

Purpose:
initialize a new repository
## 6.git clone
syntax:
git clone<repository-url>
Purpose:
create an exsiting repository
Example:
git clone [C:\xampp\htdocs\WT-Lab](https://github.com/sneha-220024/WT-Lab.git)
screenshot
<img width="1366" height="768" alt="Screenshot (26)" src="https://github.com/user-attachments/assets/80a46c52-624b-4caa-b079-3d9e980e2f0c" />
## 7.git branch clone
syntax:
git clone --branch branch-name
Purpose:
cloning branch
Example:
git clone --branch new-brach https://github.com/sneha-220024/WT-Lab.git
screenshot
## 8.git clone depth
syntax:
git clone --depth repository link
Purpose:
cloning resend commits
Example:
git clone --depth 1  https://github.com/sneha-220024/WT-Lab.git
screenshot
<img width="1366" height="768" alt="Screenshot (29)" src="https://github.com/user-attachments/assets/e80a65f6-8245-48df-b4ce-5c0ddfdf7383" />

#Repository Setup commands

## 9.git status
syntax:
git status
Purpose:
To check the git repo status
Example:
git status
screenshot
<img width="1366" height="768" alt="Screenshot (30)" src="https://github.com/user-attachments/assets/5624570a-4734-4b78-b6c7-03fe0af9a9bf" />
## 10.git log
syntax:
git log
Purpose:
To see the previous commands history in git repo's
Example:
git log
screenshot
 <img width="1366" height="768" alt="Screenshot (31)" src="https://github.com/user-attachments/assets/689c561e-6741-4dd5-8cb8-7b6f0a820cf5" />
 ## 11.git log oneline
syntax:
git log --oneline
Purpose:
To see the commit history in short forms
Example:
git log --oneline
screenshot
<img width="1366" height="768" alt="Screenshot (32)" src="https://github.com/user-attachments/assets/0e6c1f95-9f04-4dda-a300-d1e3b5a0e44c" />
 ## 11.git log graph
syntax:
git log --graph
Purpose:We can see the commit history in graph format 
Example: 
git log --graph
screenshot
<img width="1366" height="768" alt="Screenshot (33)" src="https://github.com/user-attachments/assets/79f2e6d8-a3cb-43be-aaf1-3f9751815643" />
 ## 12.git show
syntax:
git show commitID
Purpose:
helps in getting changes off specific command
Example: 
git show commitID
screenshot
<img width="1366" height="768" alt="Screenshot (34)" src="https://github.com/user-attachments/assets/958e2a9a-66f1-4746-8402-0e5971dce610" />

