
# Magento2 安装与配置指南

## 开启流程

### 启动Apache2
```bash
sudo /etc/init.d/apache2 start
```

### 启动MySQL
```bash
sudo /etc/init.d/mysql start
```

### 启动PHP
```bash
php -S localhost:8000 -t pub/
```

## Magento2 安装前的准备工作

### 启动Elasticsearch搜索引擎
```bash
sudo /etc/init.d/elasticsearch start
```

### 启动Apache2
```bash
sudo /etc/init.d/apache2 start
```

### 启动MySQL
```bash
sudo /etc/init.d/mysql start
```

## Magento2 安装过程

用于初始化Magento2的安装：

```bash
bin/magento setup:install \
--base-url="http://localhost:8000/" \
--db-host="localhost" \
--db-name="magento" \
--db-user="magento_user" \
--db-password="secure_password" \
--admin-firstname="Admin" \
--admin-lastname="User" \
--admin-email="admin@example.com" \
--admin-user="admin" \
--admin-password="admin123" \
--language="en_US" \
--currency="USD" \
--timezone="America/Chicago" \
--use-rewrites="1"
```

- 各种详细信息可以在 `app/etc/env.php` 中找到
- 前端地址：`/`
- 后端地址：`/admin_7cb4q81`

启动PHP服务：
```bash
php -S localhost:8000 -t pub/
```

## Magento2 安装后的工作

### 增加权限
```bash
sudo chmod 777 -R .
```

### 删除页面文件
```bash
rm -rf pub/static/* var/view_preprocessed/*
```

### 安装页面文件
```bash
bin/magento setup:static-content:deploy
```

### 清除缓存
```bash
php bin/magento cache:clean
php bin/magento cache:flush
php bin/magento setup:upgrade
php bin/magento setup:di:compile
```

## 问题解决

### Q1: 如何关闭两因素认证

如果admin页面无法访问，可以先关闭 `Magento_TwoFactorAuth` 模块：

```bash
php bin/magento module:disable Magento_TwoFactorAuth
```

如果有依赖的模块，也需要一起关闭：

```bash
php bin/magento module:disable Magento_TwoFactorAuthForUser
```

然后清除缓存，重新初始化：

```bash
php bin/magento cache:clean
bin/magento setup:install # 重新配置环境
```

授权文件夹权限：

```bash
chmod -R 777 .
```

### Q2: 安装SMTP邮件发送模块（TODO）

这是SMTP 邮件发送模块用于发送邮件：

```bash
composer require mageplaza/module-smtp
```

启用扩展并更新Magento：

```bash
bin/magento module:enable Mageplaza_Smtp
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
```
