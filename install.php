<?php
echo '程序成功交接,现在正在由PHP处理安装程序';
system('echo " "');
echo '请稍等5秒';
sleep('5');
system('cd ~');
mkdir('src');
system('cd src');
echo '开始准备数据库(传说中的MariaDB)';
sleep('1');
/* these was designed for centos 6
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/MariaDB.repo -O /root/src/MariaDB.repo');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/client.rpm -O /root/src/client.rpm');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/common.rpm -O /root/src/common.rpm');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/compat.rpm -O /root/src/compat.rpm');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/server.rpm -O /root/src/server.rpm');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/j.rpm -O /root/src/j.rpm');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/jd.rpm -O /root/src/jd.rpm');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/galera.rpm -O /root/src/galera.rpm');
system('mv /root/src/MariaDB.repo /etc/yum.repos.d/MariaDB.repo');
system('yum -y install /root/src/client.rpm /root/src/server.rpm /root/src/common.rpm /root/src/compat.rpm /root/src/j.rpm /root/src/jd.rpm /root/src/galera.rpm');
*/
system('yum -y groupinstall "Development tools"');
system('yum -y install mariadb mariadb-server');
system('systemctl start mariadb');
system('systemctl enable mariadb');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/db/mysql_secure_installation.sh -O /root/src/mysql_secure_installation.sh');
system('chmod -R 777 /root/src/mysql_secure_installation.sh');
//system('whiptail --title "提示!请仔细阅读" --msgbox "下面，你需要先按下enter键，再输入Y(不区分大小写)后再按enter，然后输入你想要的mysql密码，按enter,然后连续按Y后按enter4次就可以，请牢记您的mysql密码" 10 60');
system('cd /root/src && ./mysql_secure_installation.sh');
echo '接下来开始安装httpd和依赖程序(因为dhdj太懒不想编译httpd大家快打死他)';
system('yum -y remove java-1.8.0-openjdk');
system('yum -y remove java-1.7.0-openjdk');
system('yum -y remove java-1.6.0-openjdk');
system('yum -y remove java-1.5.0-openjdk');
system('yum -y remove java-1.4.0-openjdk');
system('yum -y remove java-1.3.0-openjdk');
system('yum -y remove java-1.2.0-openjdk');
system('yum -y remove java-1.1.0-openjdk');
system('yum -y remove java-1.0.0-openjdk');
system('yum -y install java-1.8.0-openjdk');
system('yum -y install apr apr-devel openssl openssl-devel apr-util-devel pcre pcre-devel');
system('yum -y install unzip zip wget gcc gcc-c++ kernel-devel vixie-cron crontabs httpd httpd-devel');
//system('cd ~ && wget https://mirrors.tuna.tsinghua.edu.cn/apache/httpd/httpd-2.4.27.tar.gz -O httpd.tar.gz && tar -zxvf httpd.tar.gz && cd httpd-2.4.27 && ./configure -prefix=/usr/local/apache2 -sysconfdir=/etc/httpd --with-mpm=worker --enable-so --enable-mods-shared=all --enable-proxy=shared --enable-proxy-balancer=shared --enable-prosy-http=shared --enable-proxy-ajp --enable-deflate --enable-cache --enable-disk-cache --enable-mem-cache -enable-so -enable-rewrite -enable-ssl && make && make install && /usr/local/apache2/bin/apxs -c -i -a ./modules/aaa/mod_authn_socache.c ./modules/cache/cache_storage.c ./modules/cache/cache_util.c ./modules/cache/mod_cache.c ./modules/cache/mod_cache_disk.c ./modules/cache/mod_cache_socache.c ./modules/cache/mod_file_cache.c ./modules/cache/mod_socache_memcache.c ./modules/cache/mod_socache_shmcb.c ./modules/ldap/util_ldap_cache.c ./modules/ldap/util_ldap_cache_mgr.c ./modules/ssl/ssl_scache.c ./support/htcacheclean.c ./modules/mappers/mod_alias.c ./modules/mappers/mod_vhost_alias.c ./modules/aaa/mod_auth_basic.c ./modules/aaa/mod_auth_digest.c ./modules/aaa/mod_auth_form.c ./modules/aaa/mod_authn_anon.c ./modules/aaa/mod_authn_core.c ./modules/aaa/mod_authn_dbd.c ./modules/aaa/mod_authn_dbm.c ./modules/aaa/mod_authn_file.c ./modules/aaa/mod_authnz_fcgi.c ./modules/aaa/mod_authnz_ldap.c ./modules/aaa/mod_authz_core.c ./modules/aaa/mod_authz_dbd.c ./modules/aaa/mod_authz_dbm.c ./modules/aaa/mod_authz_groupfile.c ./modules/aaa/mod_authz_host.c ./modules/aaa/mod_authz_owner.c ./modules/aaa/mod_authz_user.c');
system('systemctl start httpd');
system('systemctl enable httpd');
$x='1';
while($x == '1'){
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
echo "请输入mysql密码,输入错误会导致安装失败!!!!：";
$pass = trim(fgets(STDIN));
$con = mysql_connect("localhost","root",$pass);
if (!$con)
  {
  echo('无法连接数据库' . mysql_error());
      $x='1';
  }

if (mysql_query("CREATE DATABASE multicraft_panel",$con))
  {
  echo "数据库1创建成功";
      $x='233';
  }
else
  {
  echo "数据库1创建失败: " . mysql_error();
      $x='1';
  }
if (mysql_query("CREATE DATABASE multicraft_daemon",$con))
  {
  echo "数据库2创建成功";
      $x='233';
  }
else
  {
  echo "数据库2创建失败: " . mysql_error();
      $x='1';
  }

mysql_close($con);
}
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/mu.tar.gz -O mu.tar.gz && tar zxvf mu.tar.gz');
system('cd ~ && cd multicraft && chmod -R 777 /root/multicraft && ./setup.sh');
system('read -t 10 -p "请在前端初始化好数据库后回车执行接下来的代码"||break');
$y='1';
while($y=='1'){
echo "那么请输入你要设置的daemon密码:";
    fwrite(STDOUT, "请输入");
$dpass = trim(fgets(STDIN));
echo "你确定是{$dpass}么，输入小写y代表确定";
    fwrite(STDOUT, "请输入");
$isit = trim(fgets(STDIN));
if($isit=='y'){
    $y='233';
}else{
    $y='1';
}
    $z='1';
}
while($z=='1'){
echo "那么请输入你daemon的用户:";
    fwrite(STDOUT, "请输入");
$duser = trim(fgets(STDIN));
echo "你确定是{$duser}么，输入小写y代表确定";
    fwrite(STDOUT, "请输入");
$isit = trim(fgets(STDIN));
if($isit=='y'){
    $z='233';
}else{
    $z='1';
}
}
$daemonchange=file_get_contents("/home/$duser/multicraft/multicraft.conf");
file_put_contents("/home/$duser/multicraft/multicraft.conf",str_replace('none',$dpass,$daemonchange));
$panelchange=file_get_contents("/var/www/html/protected/config/config.php");
file_put_contents("/var/www/html/protected/config/config.php",str_replace('none',$dpass,$panelchange));
system('read -t 10 -p "接下来会开始破解,请做好心理准备qwq"||break');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/crack/bin.tar.gz -O /root/src/bin.tar.gz');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/crack/jar.zip -O /root/src/jar.zip');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/crack/hosts -O /root/src/hosts');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/crack/crontab -O /root/src/crontab');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/crack/multicraft.key -O /root/src/multicraft.key');
system('wget http://xcraft.cn-bj.ufileos.com/1.0.0/crack/tmpwatch -O /root/src/tmpwatch');
system('mv -f  /root/src/hosts /etc/hosts && mv -f  /root/src/multicraft.key /home/'.$duser.'/multicraft/multicraft.key && mv -f  /root/src/tmpwatch /etc/cron.daily/tmpwatch && mv -f  /root/src/crontab /etc/crontab && echo "/home/'.$duser.'/multicraft/bin/multicraft -v start" >> /etc/rc.d/rc.local && chmod 755 /home/'.$duser.'/multicraft/multicraft.key && chmod 755 /etc/hosts && chmod 755 /etc/httpd/conf/httpd.conf && chmod 755 /etc/crontab && chmod 755 /etc/cron.daily/tmpwatch && setenforce 0');
system('cd ~ && mv -f  /root/src/bin.tar.gz /home/'.$duser.'/bin.tar.gz && mv -f  /root/src/jar.zip /home/'.$duser.'/multicraft/jar/jar.zip && cd src && rm -rf bin.tar.gz && rm -rf jar.zip');
system('cd /home/'.$duser.'/multicraft/jar && unzip jar.zip && rm -rf jar.zip && chmod 755 * -R && chown '.$duser.':'.$duser.' * -R');
system('cd /home/'.$duser.' && tar xvzf bin.tar.gz && rm -rf bin.tar.gz && cd pocketmine && chmod 755 * -R && chown '.$duser.':'.$duser.' * -R');
unlink('/var/www/html/install.php');
echo '已经完成安装';
?>