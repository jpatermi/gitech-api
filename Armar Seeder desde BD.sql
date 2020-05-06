SELECT CONCAT("BusinessArea::create(['area_group_id' => '21', 'area_code' => '",
					x.Cod_Area, "', 'description' => '",
					x.Detalle_Area, "']);") AS w 
FROM x WHERE x.Grupo_Area = 'Grupo U'
