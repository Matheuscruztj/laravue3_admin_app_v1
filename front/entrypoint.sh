#!/bin/bash
if [ ! -d "node_modules" ]; 
then
    echo "Install dependencies"
    npm install
    chmod -R 777 ./
fi

exec "$@";