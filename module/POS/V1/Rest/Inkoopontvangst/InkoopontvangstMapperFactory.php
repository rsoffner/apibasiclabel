<?php
namespace POS\V1\Rest\Inkoopontvangst;

class InkoopontvangstMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new InkoopontvangstMapper($em);
    }
}
