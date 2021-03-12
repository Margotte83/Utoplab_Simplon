# Git_Demo
## Dev training exercise

Create a new repo (folder) on Github, Gitlab, Bitbucket (as you want).

Create a folder on your computer, initialize git.

Create 3 files, introduction.txt, paragraph.txt and conclusion.txt (the content is what you want) in the folder where you initialized git.

Add, commit and push these files to your online repo.
Check with git status that everything is fine.

Create a new branch and go over it with git checkout -b name_of_the_branch
Make a git clone of your repo in this new branch
Modify the content of each of your files (introduction, paragraph and conclusion) without changing the names.
add, commit and push these files to your repo.

Then go back to your branch master
And do a merge of your branch with master with git merge name_of_tabranch
And normally that should create a conflict ^^

To solve it, first, type git diff__
Then follow the instructions you get out of git.
The idea being to resolve this conflict and commit the new version of your files online