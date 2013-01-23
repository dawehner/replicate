Replicate module provides an API to duplicate / clone an entity.

Use:
----
Use replicate_clone_entity() function to clone an entity without saving it.
Use replicate_entity() function to clone an entity and save it at the end of 
the process.
See replicate.api.php file for the use of hooks functions.


Basics:
-------
Replicate provides a main cloning function, along with several hooks to control 
exactly how a field is duplicated based on its type, add info after cloning, 
and supports custom fields and entities. It is intended to developers and does 
not contain any GUI (for the moment anyway).

The goal is to provide a way to easily clone any entity, and to allow developers 
to be able to control exactly how entities are replicated, based on their type 
or the fields they contain, and to be able to easily extend the replication 
control to custom fields or entities.


But there already is a Node Clone module!
-----------------------------------------
The Node Clone module focus on cloning using the administration interface and is
designed only for nodes replication, whereas Replicate can clone any entities 
(nodes, taxonomy terms, users, ...). Replicate is developer-oriented, and let 
you manage the cloning process the way you want.
Node Clone has also only one hook to alter cloned nodes, Replicate provides 
several hooks to be able to work on a specific entity type or field type and 
thus writing the smallest amount of code required.


Why do I need Replicate module on my project?
---------------------------------------------
You need Replicate if you have the need to clone / duplicate content on your 
site and if you want to have full control over how entities are replicated, 
and write specific replication process.
For example modules can be easily written to extend Replicate functionalities to 
manage node references when duplicating a node in another language so that the 
node references reference translated contents and not the original referenced 
nodes.
Or to tell Drupal how to duplicate the super field you created and use on 
taxonomy terms.

This module was originally developed for a big project involving a complex 
replication workflow, where a global site is creating and publishing content and 
sent it to sub-sites in several other languages to be translated.
The contents are very complex and use a lot of node references and field 
collections.


What else?
----------
Dependencies:
-Entity API

Replicate already implements basic replication cleaning functions for the 
Drupal core entities:
-Nodes
-Taxonomy Vocabularies
-Taxonomy Terms
-Users
-Comments
-Files

See also:
Replicate Field Collection (https://drupal.org/sandbox/jgalletta/1782226)

Thanks:
Thanks to Vincent Bouchet for his help on the coding and testing of this module.
Module development sponsorized by Capgemini Drupal Factory.
