# openvpn-nulled
OpenVPN Access Server 2.12.1 无连接数限制

OpenVPN Access Server 2.12.1 No limit on the number of connections

避坑：安装完成后，一定要启动一次，正确的进入页面，看到只有2个许可，然后再破解，否则将会陷入死循环报错中
![Image](https://github.com/linke131/openvpn-nulled/blob/main/20230712_1123440.png)

就像这样：👇
![Image](https://github.com/linke131/openvpn-nulled/blob/main/IMG_20231004_211010.png)

# 执行命令


systemctl stop openvpnas


reboot


systemctl start openvpnas


systemctl status openvpnas

# En
Avoid pitfalls: After the installation is completed, be sure to start it once, enter the page correctly, see that there are only 2 licenses, and then crack it, otherwise you will fall into an infinite loop and report errors.
![Image](https://github.com/linke131/openvpn-nulled/blob/main/20230712_1123440.png)

Like this: 👇
![Image](https://github.com/linke131/openvpn-nulled/blob/main/IMG_20231004_211010.png)

# Excuting an order


systemctl stop openvpnas


reboot


systemctl start openvpnas


systemctl status openvpnas



# 使用方法 备份并替换文件
mv /usr/local/openvpn_as/lib/python/pyovpn-2.0-py3.6.egg /usr/local/openvpn_as/lib/python/pyovpn-2.0-py3.6.egg.orginal
cp ./pyovpn-2.0-py3.10.egg.cracked_2.12.1 /usr/local/openvpn_as/lib/python/pyovpn-2.0-py3.6.egg

# 重启服务
systemctl restart openvpnas
破解文件测试系统: Centos7
其他系统未测试
破解文件使用: Python V3.10.9 构建

# En
# bak Back up and replace source files
mv /usr/local/openvpn_as/lib/python/pyovpn-2.0-py3.6.egg /usr/local/openvpn_as/lib/python/pyovpn-2.0-py3.6.egg.orginal
cp ./pyovpn-2.0-py3.10.egg.cracked_2.12.1 /usr/local/openvpn_as/lib/python/pyovpn-2.0-py3.6.egg

# restart server
systemctl restart openvpnas

Cracked file test system: Centos7
Not tested on other systems
Crack file using: Python V3.10.9 build

# Renderings 效果图
![Image](https://github.com/linke131/openvpn-nulled/blob/main/IMG_20231004_203410.jpg)

![Image](https://github.com/linke131/openvpn-nulled/blob/main/IMG_20231004_204417.jpg)
