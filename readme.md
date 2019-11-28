# Eloquent object relations

## Install
```
composer require websystemssolutions/eloquent-object-relations
```
Using
---
```
use WebSystemsSolutions\EloquentObjectRelations\HasObjectRelations;

class User extends Model
{
    use HasObjectRelations;
    ....
}
```