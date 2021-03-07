<?php
// subject Conhece os seus observadores.
interface Subject
{    
     function add(Observer $observer);
     function delete(Observer $observer);
     function notify();
}
