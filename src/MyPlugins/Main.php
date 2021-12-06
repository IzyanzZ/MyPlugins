<?php

namespace MyPlugins;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("Plugin 'MyPlugins' Enabled");
    }

    public function onDisable()
    {
        $this->getLogger()->info("Plugin 'MyPlugins' Disabled");
    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, array $args): bool
    {
        switch ($cmd->getName()) {
            case "mypl":
                if ($sender instanceof Player) {
                    $sender->sendMessage("Hello OwO");
                } else {
                    $sender->sendMessage("Use command in game");
                }
        }
        return true;
    }
}
