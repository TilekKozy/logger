### Application

| Т       |   В |
|---------|----:|
| Laravel | v10 |
| PHP     | 8.1 |
| sqlite |     |

# УСТАНОВКА

#### 1. Клонируем проект

```code
git clone git@github.com:TilekKozy/logger.git
```

#### 2. Установите в каталоге проекта такой уровень разрешений, чтобы ее владельцем был пользователь без привилегий root

```code
sudo chown -R $USER:$USER logger
```

#### 3. Перейдите в каталог logger

```code
cd logger
```

#### 4. Запускаем bash script

```code
sh build.sh
```

#### 5. Переходим по ссылке

```code
http://localhost/log
```
