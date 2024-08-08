### Application

| Т       |   В |
|---------|----:|
| Laravel | v10 |
| PHP     | 8.1 |
| sqlite |     |

# УСТАНОВКА

#### 1. Клонируем проект

```code
git clone git@github.com:TilekKozy/nemo.git
```

#### 2. Установите в каталоге проекта такой уровень разрешений, чтобы ее владельцем был пользователь без привилегий root

```code
sudo chown -R $USER:$USER test_task
```

#### 3. Перейдите в каталог test_dev

```code
cd test_task
```

#### 4. Запускаем bash script

```code
sh build.sh
```

#### 5. Переходим по ссылке

```code
http://localhost/log
```
