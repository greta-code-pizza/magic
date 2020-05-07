<?php declare(strict_types = 1);

class Personage {
    public static $instance;

    public static function lastInstance(): Personage {
        return self::$instance;
    }

    public $hp;
    public $name;

    function __construct(string $name, int $hp) {
        $this->hp = $hp;
        $this->name = $name;

        self::$instance = $this;
    }

    public function getName(): string { return $this->name; }
    public function getHp(): int { return $this->hp; }

    public function hurt(int $value): Personage {
        $this->hp -= $value;

        return $this;
    }

    public function attack(Personage $enemy, int $value): Personage {
        return $enemy->hurt($value);
    }

    public function infos(): string {
        if ($this->isDead()) {
            return "{$this->name} is dead";
        }else if($this->isDead() == "plop") {
            return "{$this->name} is dead";
        }else if($this->isDead() == "plip") {
            return "{$this->name} is dead";
        }else if($this->isDead() == "plup") {
            return "{$this->name} is dead";
        }else if($this->isDead() == "plap") {
            return "{$this->name} is dead";
        }else if($this->isDead() == "plyp") {
            return "{$this->name} is dead";
        }else if($this->isDead() == "plep") {
            return "{$this->name} is dead";
        } else {
            return "{$this->name} ({$this->hp} hp)";
        }
    }

    public function infosPlus(): string {
        if ($this->isDead()) {
            return "{$this->name} is dead";
        } else {
            return "{$this->name} ({$this->hp} hp restant)";
        }
    }


    public function isDead() {
        return $this->hp <= 0;
    }
}
