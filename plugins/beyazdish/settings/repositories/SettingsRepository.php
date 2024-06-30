<?php

namespace Beyazdish\Settings\Repositories;

use Beyazdish\Settings\Models\Addresses;
use Beyazdish\Settings\Models\Emails;
use Beyazdish\Settings\Models\Hours;
use Beyazdish\Settings\Models\PhoneNumbers;
use Beyazdish\Settings\Models\SettingsPage;
use Beyazdish\Settings\Models\Socials;


class SettingsRepository
{

    public function __construct(public SettingsPage $settings, public PhoneNumbers $numbers, public Socials $socials, public Emails $emails, public Addresses $address, public Hours $hours)
    {
    }


    public function settingsQuery()
    {
        return $this->settings->first();
    }
    public function socialsQuery()
    {
        return $this->socials->first();
    }
    public function emailsQueryOnNavbar()
    {
        return $this->emails->where('on_navbar', 1)->get();
    }

    public function emailsQueryOnFooter()
    {
        return $this->emails->where('on_footer', 1)->get();
    }

    public function numbersQueryOnNavbar()
    {
        return $this->numbers->where('on_navbar', 1)->get();
    }

    public function numbersQueryOnFooter()
    {
        return $this->numbers->where('on_footer', 1)->get();
    }

    public function addressesQuery()
    {
        return $this->address->all();
    }

    public function hours()
    {
        return $this->hours->first();
    }





    public function emailsQueryOnContactForm()
    {
        return $this->emails->where('on_contact_form', 1)->get();
    }

    public function numbersQueryOnContactForm()
    {
        return $this->numbers->where('on_contact_form', 1)->get();
    }

    public function addressesQueryOnContactForm()
    {
        return $this->address->where('on_contact_form', 1)->get();
    }
}
