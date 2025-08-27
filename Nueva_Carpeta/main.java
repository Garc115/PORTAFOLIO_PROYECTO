/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package filosofos_177001;

/**
 *
 * @author 177001
 */
public class main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args){
        Mesa m = new Mesa(5); //Inicializar Mesa con 5 filosofos
        for(int i=1;i<=5;i++) //Ciclo para inicializar los procesos de los filosofos
        {
            Filosofo f = new Filosofo (m,i);
            f.start(); //Inicialización del ciclo de vida del filosofo
        }
    }  
}
