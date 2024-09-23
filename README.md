<h1 align="center" style="font-weight: bold;">API Cache 💻</h1>

[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity)

<p align="center">
 <a href="#tech">Technologies</a> • 
 <a href="#started">Getting Started</a> • 
  <a href="#routes">API Endpoints</a> •
  <a href="#contacts">Contacts</a>
</p>

<p align="center">
    <b> This system is a simples webchat. The purpose is learn about websockets using Pusher and Jetstream from Laravel. </b>
</p>

<h2 id="tech">💻 Technologies</h2>

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Git](https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white)
![Pusher](https://img.shields.io/badge/Pusher-2E00B2?style=for-the-badge&logo=pusher&logoColor=white)
![Postgres](https://img.shields.io/badge/postgres-%23316192.svg?style=for-the-badge&logo=postgresql&logoColor=white)
![Redis](https://img.shields.io/badge/redis-%23DD0031.svg?style=for-the-badge&logo=redis&logoColor=white)

OBS: The database used is PostgreSQL but feel free to use another one.

<h2 id="started">🚀 Getting started</h2>

<h3>Prerequisites</h3>

- [**PHP** version **8** or superior](https://www.php.net/);
- [**Laravel 10** or superior](https://laravel.com/);
- [**GIT 2** or superior](https://github.com);
- [**Pusher**](https://pusher.com);
- [**Redis** version **6.0.16** or superior](https://redis.io/docs/latest/operate/oss_and_stack/install/install-redis/install-redis-on-windows/);
- [Any database](https://www.postgresql.org);

<h3>Cloning</h3>

With the command below you will clone the project to your computer:

```bash
git clone https://github.com/m-eufrasio/webchat.git
```

<h3>Config .env variables</h2>

1. Use the `.env.example` as reference to create your configuration file `.env`.
2. To use Redis, you need do set `redis` in <b>QUEUE_CONNECTION</b>. After that, in <b>REDIS_CLIENT</b> set `predis` (or another lib equivalent)

build...


