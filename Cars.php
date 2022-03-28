<?php 
class Cars
{
    private int $wheels;
    private int $currentSpeed;
    private string $colors;
    private int $numberSite;
    private string $fuel;
    private string $levelFuel = 'medium';
    
    public function __construct(string $colors, int $numberSite, string $fuel)
    {
        $this->color = $colors;
        $this->numberSite = $numberSite;
        $this->fuel = $fuel;   
    
    }
    public function start():string
    {
        $levelFuel = 'medium';
       if( $this->levelFuel = 'medium'){
       return 'The fuel is ' . $levelFuel . ' careful';
        } elseif ($this->levelFuel = 'high'){
        return 'All is right ! The fuel is ' . $levelFuel;
        }else{
        return 'You can\'t go, check your fuel';
        }

    }
    public function forward():string
    {
         $this->currentSpeed = 30;
         return "GO !";
        
    }
    public function brake():string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!!!";
        }
        $sentence .= "I'm stopped...";
        return $sentence;
    }
    public function getWheels():int
    {
        return $this->wheels;
    }
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }
    public function getColors():string
    {
        return $this->colors;
    }public function getNumberSite():int
    {
        return $this->numberSite;
    }public function getFuel():string
    {
        return $this->fuel;
    }
    public function getLevelFuel():int
    {
        return $this->levelFuel;
    }
}
?>