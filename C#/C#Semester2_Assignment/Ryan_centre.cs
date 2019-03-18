using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace final_project
{
    public class Ryan_centre
    {
        private string centreName;
        private string city;
        private double price;
        private int[] month;
        private int[] adults;
        private int[] children;
        
        public int[] monthCount;
        

        public static double ReturnRev(double  a, double b)
        {
            double total = 0;
            total = a * b;
            return total;
        }
       

        public static int GetHighestvisitsOneMonth(int[] attendanceNumbers, int[] MothtNumber, int size)
       {
            int Month = 0;
            int highestVists = attendanceNumbers[0];
            
            for (int i = 0; i < size; i++)
            {
                if (highestVists <= attendanceNumbers[i])
                {
                    highestVists = attendanceNumbers[i];
                    Month = MothtNumber[i];
                }
            }
            return Month;

       }
        public static double GetLowestMonth(double[] monthlyRev, int[] MothtNumber, int size)
        {
            int Month = 0;
            double LowestMonth = monthlyRev[0];

            for (int i = 0; i < size; i++)
            {
                if (LowestMonth >= monthlyRev[i])
                {
                    LowestMonth = monthlyRev[i];
                    Month = MothtNumber[i];
                }
            }
            return Month;

        }

      
             public static double GetLowestRevNum(double[] monthlyRev, int[] MothtNumber, int size)
        {
            double LowestRev = 0;
            int Month = 0;
            double LowestMonth = monthlyRev[0];

            for (int i = 0; i < size; i++)
            {
                if (LowestMonth >= monthlyRev[i])
                {
                    LowestRev = monthlyRev[i];
                    Month = MothtNumber[i];
                }
            }
            return LowestRev;

        }
        public Ryan_centre(double Price, int[] Month, int[] Adult, int[] Children, double[] monthlyRev, string centrename, string city)
        {
            
            price = Price;
            month = new int [Month.Length];
            adults = new int[Month.Length];
            children = new int[Month.Length];
            

        }

        public static string ToDate( double Number )
        {
            string[] Darray = new string[12];
            string MonthConvert = "";
            string[] dArray =  { "January", "Febuary", " March", "April", "May", "June", "July", "August", "September", "October", "November", "December" };
           
            for (int i = 1; i < dArray.Length+1
                ; i++)
            {
                if (i == Number)
                {
                    MonthConvert = dArray[i-1];
                }

            }
            return MonthConvert;
        }


        public string CentreName
        {
            get
            {
                return centreName;
            }
            set
            {
                centreName = value;
            }
        }

        public string City
        {
            get
            {
                return city;
            }
            set
            {
                city = value;
            }
        }
        private double Price
        {
            get
            {
                return price;
            }
            set
            {
                price = value;
            }
        }
        public override string ToString()
        {
            return "\tLocation: " + cd;
                    

        }







    }

            

        }
    


  
   

         


