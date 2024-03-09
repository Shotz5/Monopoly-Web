#!/bin/bash

npm --prefix /app install
npm --prefix /app run dev &

php /app/artisan serve --host=0.0.0.0
