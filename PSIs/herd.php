<?php

    class Prods
    {

        public $whiskey;
        public $skoll;
        public $leite;

        //////////////////////////////////////////////////

        public function GetWhiskeyT()
        {
            return $this->whiskey;
        }

        public function GetSkollT()
        {
            return $this->skoll;
        }
        
        public function GetLeiteT()
        {
            return $this->leite;
        }

        
    }

    class val
    {
        public $valW = 0;
        public $valS = 0;
        public $valL = 0;
        public $add;

        public function AddWhiskey($add)
        {
            $this->valW = $this->valW + $add;
            return $this->valW;
        }

        public function AddSkoll($add)
        {
            $this->valS = $this->valS + $add;
            return $this->valS;
        }
        
        public function AddLeite($add)
        {
            $this->valL = $this->valL + $add;
            return $this->valL;
        }  
        
    }

    class del extends val
    {
        public function minusW($minus)
        {
            $this->valW = $this->valW - $minus; // Caso emergencia ponha em php individual para cada function armazenando valor
            return $this->valW;
        }

        public function minusL($minus)
        {
            $this->valL = $this->valL - $minus;
            return $this->valL;
        }

        public function minusS($minus)
        {
            $this->valS = $this->valS - $minus;
            return $this->valS;
        }

    }

    $clsAddW = new val();
    $baseW = $clsAddW->AddWhiskey(10);

    $clsAddS = new val();
    $baseS = $clsAddS->AddSkoll(12);

    $clsAddL = new val();
    $baseL = $clsAddL->AddLeite(9);

?>