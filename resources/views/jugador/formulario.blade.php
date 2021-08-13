 
<label for="equipo">Equipo</label>   
<input type="text" name="equipo" value={{$jugador->equipo}} id="equipo">
<br>

<label for="jugador">Jugador</label>  
<input type="text" name="jugador" value={{$jugador->jugador}} id="jugador">
<br>

<label for="goles">Goles</label>  
<input type="text" name="goles" value={{$jugador->goles}} id="goles">
<br>

<label for="posicion">Posicion</label>  
<input type="text" name="posicion"value={{$jugador->posicion}} id="posicion">
<br>
 
<button type="submit" id="enviar">Enviar</button>
