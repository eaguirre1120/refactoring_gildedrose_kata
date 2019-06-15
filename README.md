# Módulo 1 - Patrones de diseño en Ingeniería de Software
# Refactorización Gilded Rose
Pasos para refactorizar:
- Separación de clases en dos archivos: Item.php y GildedRose.php 
- Aplicar el patrón de comportamiento Strategy:
  - Convertir la clase Item (Strategy) en una clase abstracta.
  - Crear las clases concretas (ConcreteStrategy) extendida de Item: AgedbrieItem, SulfurasItem, BackstagepassesItem, ConjuredItem y DefaultItem
  - Adaptar la clase GildedRose como el Context.
  - Aplicar el algoritmo necesario en el método update() en las clases concretas.
