# PHP-SEO-scripts

Набор скриптов облегчающих работу с SEO данных написанных на PHP.

## Как работать с Google APIs Client Library for PHP?

* Добавляем к себе на хостинг библиотеку [google-api-php-client](https://github.com/googleapis/google-api-php-client). Её можно скачать напрямую, а можно воспользоваться Composer.
* Заходим в консоль [Google Cloud Platform](https://console.cloud.google.com/) и создаем проект. В него добавляем нужные API, например Google Search Console API, Indexing API и др.
* В проекте создаём Service Accounts и генерируем для него ключ в JSON формате. Копируем email сервисного аккаунта.
* В панеле Google Search Console для сайтов с которыми работаем добавляем пользователя (email сервисного аккаунта) с нужными правами (для Indexing API нужны права владельца).
* Редактируем нужный файл. Не забываем указывать вместо тестовых данных свой сайт.

## Скрипт для работы с методом [URL Inspection Google API](https://developers.google.com/webmaster-tools/v1/urlInspection.index/inspect) (gsc_inspection.php)

Для того чтобы [скрипт](https://github.com/vital-prusakov/PHP-SEO-scripts/blob/main/gsc_inspection.php) работал, необходимо установить библиотеку google-api-php-client и создать сервисный аккаунт.

Ограничения метода URL Inspection (на 01.02.2022):
* 2,000 запросов в день на один ресурс (не домен!)
* 600 запросов в минуту
