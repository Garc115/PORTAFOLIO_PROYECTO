/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package filosofos_177001;

import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author 177001
 */
public class Filosofo extends Thread {
    private Mesa mesa;
    private int comensal;
    private int indiceComensal;
    
    public Filosofo(Mesa m, int comensal) //Constructor de clase
    {
        this.mesa=m;
        this.comensal=comensal;
        this.indiceComensal=comensal-1;
    }
    @Override
    public void run() //Método run para definir el ciclo de vida del proceso Filosofo
    {
        while(true)
        {
            this.Pensado();
            this.mesa.agarrarTenedor(this.indiceComensal);
            this.comer();
            System.out.println("Filosofo " + comensal + " deja de comer, tenedores libres "+ (this.mesa.tenedorIzquierda(this.indiceComensal)+1)+
                    ", "+(this.mesa.tenedorDerecha(this.indiceComensal)));
            this.mesa.liberarTenedor(this.indiceComensal);          //Ciclo de vida
            try {
                Thread.sleep(1000);
            } catch (InterruptedException ex) {
                Logger.getLogger(Filosofo.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
    public void Pensado() //Método de clase, esperar mientras el filosofo piensa
    {
        System.out.println("Filosofo " + comensal+ " Esta pensado");
        try{
            sleep((long)(Math.random()*4000));
        }catch(InterruptedException ex){}    
    }
    public void comer() //Método de clase, esperar mientras el filosofo come
    {
        System.out.println("Filosofo " + comensal + " Esta comiendo");
        try{
            sleep((long)(Math.random()*4000));
        }catch(InterruptedException ex){}
    }
    
}
