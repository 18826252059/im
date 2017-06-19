# im
即时通讯系统（已完成）

（1）git clone已存在GitHub上的Repository。（在新建的~/MyTestFolder目录中）

git clone https://github.com/zhchnchn/ZhchnchnTest.git
（2）修改一个文件，然后提交

vim README.md
git status
git add README.md
git status
git commit -m "Edit by WorkUbuntu 1204"
git status
git remote add origin https://github.com/zhchnchn/ZhchnchnTest.git
这时会报错误：

fatal: remote origin already exists.

解决办法【3】：

$ git remote rm origin
然后再次执行 git remote add origin https://github.com/zhchnchn/ZhchnchnTest.git

（3）之后，需要将修改push到GitHub上

git push -u origin master
执行该条命令后，会要求输入GitHub账户的用户名和密码。

（4）提交完成后，查看GitHub上的Repository，会发现内容修改成功。
