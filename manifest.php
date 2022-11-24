<php?

$manifest = '{
    widgets: {
      "main": "./widgets/main",
      "userData": "./widgets/userData",
      "counter": "./widgets/counter",
      "home": "./widgets/home",
      "menu": "./widgets/menu",
    },
    "listeners": {
      "increment": "./listeners/increment",
      "onEnvStart": "./listeners/onEnvStart",
      "onSessionStart": "./listeners/onSessionStart",
      "onUserFirstJoin": "./listeners/onUserFirstJoin"
    },
    "rootWidget": "main"
}';

?>