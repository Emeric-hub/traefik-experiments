#!/bin/bash

cd proxy
docker compose up -d
cd ..

for dir in */; do
    echo "Starting $dir"
    cd $dir || exit
    docker compose up -d
    cd ..
done
