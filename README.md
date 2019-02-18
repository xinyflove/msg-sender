# 消息推送框架

msg-sender是一款web长连接推送框架，采用[PHPSocket.IO](https://github.com/walkor/phpsocket.io)开发，基于WebSocket长连接通讯，如果浏览器不支持WebSocket则自动转用comet推送。 通过后台推送消息，消息可以即时推送到客户端，非轮询，实时性非常好，性能很高。

## 后端服务启动停止

### Linux系统

**启动服务**
php start.php start -d

**停止服务**
php start.php stop

**服务状态**
php start.php status

### windows系统
双击start_for_win.bat

如果启动不成功请参考 [Workerman手册](http://doc3.workerman.net/install/requirement.html) 配置环境