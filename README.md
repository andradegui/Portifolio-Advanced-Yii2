# Portifolio Advanced Yii2

## Iniciando projeto

`php init`

## Migration

- Criar

`php yii migrate/create create_project_table`

`php yii migrate/create create_post_table --fields="title:string:notNull, body:text:notNull, is_published:boolean:notNull, created_at:bigInteger:notNull, updated_at:bigInteger:notNull`


- Rollback

`php yii migrate/down `

- Rodar migration

`php yii migrate`

# Configurando o Krajee

`composer require kartik-v/yii2-editors "dev-master"`

`composer require yiisoft/yii2-bootstrap4`