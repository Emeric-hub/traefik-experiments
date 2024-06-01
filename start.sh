#!/bin/bash

for dir in */; do
    echo "Starting $dir"
    cd $dir || exit
    docker compose up -d
    cd ..
done
