<?php

declare(strict_types=1);

class Meldungsmodul extends IPSModule
{
    public function Create()
    {
        // Diese Zeile nicht löschen
        parent::Create();

        $this->RegisterPropertyBoolean('Active', true);
    }

    public function Destroy()
    {
        // Diese Zeile nicht löschen
        parent::Destroy();
    }

    public function ApplyChanges()
    {
        // Diese Zeile nicht löschen
        parent::ApplyChanges();

        $this->SetStatus($this->ReadPropertyBoolean('Active') ? IS_ACTIVE : IS_INACTIVE);
    }
}
