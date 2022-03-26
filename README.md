# Free Casino

hosting platformsCasino site with free to play slots and table games. Created to practice flexbox, responsive CSS and to play free games on desktop and mobile. It was written in PHP so that it can easly be hosted on free providers such as [InfinityFree](https://infinityfree.net/).

The site can be accessed at: [free-casino.gq](https://free-casino.gq/)

## Development

Start development environment:

```
docker-compose up
```

This is configured to use port 80, so the site can be accessed on 127.0.0.1. To change the port, edit EXPOSE in Dockerfile and ports in docker-compose.yml.

## Game data

Due to the small number of games and to keep deployment simple, all the game data is defined in content/games.json, but to scale up a database should be used. Additional information is included such as category, game provider and description which isn't currenly used, but is useful if filterng is to be implemented.

All games are 16:9 aspect ratio, so if we introduce games with a different aspect ratio, we need to store the aspect ratio in the game data and modify js/size-game.js.


