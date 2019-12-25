# Eloquent object relations

## Install
```
composer require mistery23/eloquent-object-relations
```
Using
---
If you use value object wrap in `id` primary key, or foreign key (your value object by `id` need to implement magic method `__toSting()`), or primary key is string.

Work with relations: BelongsTo, BelongsToMany, HasOne, HasMany.
```
use Mistery23\ObjectRelations\HasObjectRelations;

class User extends Model
{
    use HasObjectRelations;
    ....
}
```