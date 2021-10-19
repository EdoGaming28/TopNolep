# TopNolep

TopNolep is a plugin that retrieves the game time the player was on the server during, not only that, topnolep now provides a leaderboard that shows a list of the top 10 people who are often online on the server.

# Addon
[TopNolepAddon](https://github.com/EdoGaming28/TopNolepAddon)
# Commands
Command | Alias| Default
------- | ---------- | --------
onlinetime | onlinet, ot | true
------- | ---------- | --------
settopnolep | null | op

# API
Get online player time on scorehud
```php
$this->getServer()->getPluginManager()->getPlugin("TopNolep")->getNolepTime($player);
```
Get the whole seconds number
```php
$this->getServer()->getPluginManager()->getPlugin("TopNolep")->getTime($player);
```
Get the real hours number
```php
$this->getServer()->getPluginManager()->getPlugin("TopNolep")->getRealTimeHours($player);
```
Get the real minutes number
```php
$this->getServer()->getPluginManager()->getPlugin("TopNolep")->getRealTimeMinutes($player);
```
Get the real seconds number
```php
$this->getServer()->getPluginManager()->getPlugin("TopNolep")->getRealTimeSeconds($player);
```
Get a whole time format as described in the config
```php
$this->getServer()->getPluginManager()->getPlugin("TopNolep")->getRealTime($player);
```

----------------

If there is an error, you can contact my WhatsApp below

| Whatsapp |
| :---: |
[![081293138931] |
