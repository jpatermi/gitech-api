<?php

use Illuminate\Database\Seeder;
use App\AreaGroup;

class AreaGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AreaGroup::create(['name' => 'Grupo A', 'description' => 'AGRICULTURA, GANADERÍA, SILVICULTURA Y PESCA']);
        AreaGroup::create(['name' => 'Grupo B', 'description' => 'INDUSTRIAS EXTRACTIVAS']);
        AreaGroup::create(['name' => 'Grupo C', 'description' => 'INDUSTRIA MANUFACTURERA']);
        AreaGroup::create(['name' => 'Grupo D', 'description' => 'SUMINISTRO DE ENERGÍA ELÉCTRICA, GAS, VAPOR Y AIRE ACONDICIONADO']);
        AreaGroup::create(['name' => 'Grupo E', 'description' => 'SUMINISTRO DE AGUA, ACTIVIDADES DE SANEAMIENTO, GESTIÓN DE RESIDUOS Y DESCONTAMINACIÓN']);
        AreaGroup::create(['name' => 'Grupo F', 'description' => 'CONSTRUCCIÓN']);
        AreaGroup::create(['name' => 'Grupo G', 'description' => 'COMERCIO AL POR MAYOR Y AL POR MENOR; REPARACIÓN DE VEHÍCULOS DE MOTOR Y MOTOCICLETAS']);
        AreaGroup::create(['name' => 'Grupo H', 'description' => 'TRANSPORTE Y ALMACENAMIENTO']);
        AreaGroup::create(['name' => 'Grupo I', 'description' => 'HOSTELERÍA']);
        AreaGroup::create(['name' => 'Grupo J', 'description' => 'INFORMACIÓN Y COMUNICACIONES']);
        AreaGroup::create(['name' => 'Grupo K', 'description' => 'ACTIVIDADES FINANCIERAS Y DE SEGUROS']);
        AreaGroup::create(['name' => 'Grupo L', 'description' => 'ACTIVIDADES INMOBILIARIAS']);
        AreaGroup::create(['name' => 'Grupo M', 'description' => 'ACTIVIDADES PROFESIONALES, CIENTÍFICAS Y TÉCNICAS']);
        AreaGroup::create(['name' => 'Grupo N', 'description' => 'ACTIVIDADES ADMINISTRATIVAS Y SERVICIOS AUXLIARES']);
        AreaGroup::create(['name' => 'Grupo O', 'description' => 'ADMINISTRACIÓN PÚBLICA Y DEFENSA; SEGURIDAD SOCIAL OBLIGATORIA']);
        AreaGroup::create(['name' => 'Grupo P', 'description' => 'EDUCACIÓN']);
        AreaGroup::create(['name' => 'Grupo Q', 'description' => 'ACTIVIDADES SANITARIAS Y DE SERVICIOS SOCIALES']);
        AreaGroup::create(['name' => 'Grupo R', 'description' => 'ACTIVIDADES ARTÍSTICAS, RECREATIVAS Y DE ENTRENIMIENTO']);
        AreaGroup::create(['name' => 'Grupo S', 'description' => 'OTROS SERVICIOS']);
        AreaGroup::create(['name' => 'Grupo T', 'description' => 'ACTIVIDADES DE LOS HOGARES COMO EMPLEADORES DE PERSONAL DOMÉSTICO; ACTIVIDADES DE LOS HOGARES COMO PRODUCTORES DE BIENES Y SERVICIOS PARA USO PROPIO']);
        AreaGroup::create(['name' => 'Grupo U', 'description' => 'ACTIVIDADES DE ORGANIZACIONES Y ORGANISMOS EXTRATERRITORIALES']);
    }
}
