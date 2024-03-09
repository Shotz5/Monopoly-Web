FROM 'php:8.2'

RUN apt-get update && \
    apt-get install -y \
    software-properties-common \
    libcurl4-openssl-dev \
    libonig-dev \
    npm && \
    apt-get clean

RUN npm install npm@latest -g

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install curl
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install mbstring

ENTRYPOINT [ "./app/run.sh" ]
