# eZoom_fullstack_challenge
Fullstack single page test with Laravel

## 🚀 Getting Started

### Navigate to the Project Directory:
```bash
cd /eZoom
```

### Set laravel .env:
```bash
cp .env.example .env
```

### Give project folder permissions
```bash
sudo chown -R $USER:$USER ./eZoom
sudo chmod -R 777 eZoom
```

### Build Docker containers
```bash
docker-compose up -d --build
```

### Enter web container with bash
```bash
docker-compose exec web bash
```

### Install composer dependencies for laravel
```bash
composer install

composer dump-autoload -o
```
### Generate a laravel key
```bash
php artisan key:generate"
```

### Run npm:
```bash
docker-compose exec web bash
npm run dev
```


## ⚙️ General Docker Commands

### Remove Containers:
```bash
docker rm $(docker ps -qa)
```

### Remove volumes:
```bash
docker-compose down -v
```

### Build containers:
```bash
docker-compose up --build
```

```bash
### Stop and remove containers
docker-compose down
docker rm $(docker ps -a -q)
```