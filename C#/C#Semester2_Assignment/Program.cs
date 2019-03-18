using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace final_project
{
    class Ryan_Program
    {
        static void Main(string[] args)
        {
            
            string centreName = "";
            string city = "";
            double price = 0;
            int[] month = new int[12];
            int[] adults = new int[12];
            int[] children = new int[12];
            double[] monthlyRev = new double[12];
            int DataCentreInfo;

            centreName = "";

            DataCentreInfo = getdata(  price, month, adults, children, monthlyRev, centreName, city);
            Ryan_centre Cd = new Ryan_centre(price, month, adults, children, monthlyRev, centreName, city);
            Console.WriteLine(Cd);
           
        }
        public static int getdata(double price, int[] month, int[] adults, int[] children, double[] monthlyRev, string centreName, string city)
            {
            Console.WriteLine("How many centres are there to compare?");
            int numberOfCentres = Convert.ToInt32(Console.ReadLine());
            int x = 1;
            int i = 0;
            for (int count = 0; count < numberOfCentres; x++, count++)
                {
                //name input
                Console.WriteLine("What is the name of centre {0} ", x);  
                centreName = Console.ReadLine();
                Console.Clear();
                //city input
                Console.WriteLine("What city is the {0} located in?", centreName); 
                city = Console.ReadLine();
                Console.Clear();
                // price input 
                Console.WriteLine("What is the price of an adult ticket at the {0}?", centreName); 
                price = Convert.ToDouble(Console.ReadLine());
                Console.Clear();
                // numof months input 
                Console.WriteLine("How many months would you like to compare?");
                int NumofMonth = Convert.ToInt32(Console.ReadLine());
                month = new int[NumofMonth];                 //parallel arrays for comparisons.
                adults = new int[NumofMonth];
                children = new int[NumofMonth];
                monthlyRev = new double[NumofMonth];

                for (i = 1; i <= NumofMonth; i++)
                {
                    Console.WriteLine("What month would you like to compare? Jan = 1, Dec = 12");
                    month[i - 1] = Convert.ToInt32(Console.ReadLine());

                    Console.WriteLine("How many adult admits attended the centre in {0}? ", Ryan_centre.ToDate(month[i - 1]));
                    adults[i - 1] = Convert.ToInt32(Console.ReadLine());
                    if (adults[i - 1] < 0)
                    {
                        Console.WriteLine("Admits must be zero or more.");
                        adults[i - 1] = 0;
                    }

                    Console.WriteLine("How many Child admits attended the center in");
                    children[i - 1] = Convert.ToInt32(Console.ReadLine());
                    if (children[i - 1] < 0)
                    {
                        Console.WriteLine("Admits must be zero or more.");
                        adults[i - 1] = 0;
                        continue;
                    }
                    monthlyRev[i - 1] = Ryan_centre.ReturnRev(adults[i - 1], price);

                }

                Console.WriteLine("YEAR 2016");
                Console.WriteLine("Displaying data for {0}:", centreName);
                for (i = 0; i < NumofMonth; i++)
                {
                    Console.WriteLine("\n Month {0}: {1}", x, Ryan_centre.ToDate(month[i]));
                    Console.WriteLine("\nNumber of adults: {0}", adults[i]);
                    Console.WriteLine("\nNumber of children {0}", children[i]);
                    Console.WriteLine("\nRevenue for {0} is: {1}", Ryan_centre.ToDate(month[i]), monthlyRev[i]);

                }

                int adultHighest = Ryan_centre.GetHighestvisitsOneMonth(adults, month, adults.Length);
                int childHighest = Ryan_centre.GetHighestvisitsOneMonth(children, month, children.Length);
                double MonthLowestRev = Ryan_centre.GetLowestMonth(monthlyRev, month, month.Length);
                double amountOfleastRev = Ryan_centre.GetLowestRevNum(monthlyRev, month, month.Length);
                string MonthConverted = Ryan_centre.ToDate(MonthLowestRev);
                string display = "";
                display.ToString();

                Console.WriteLine("\nDiaplying Statistical Report for 2016:\n");
                Console.WriteLine("\n\nhighest adult attendance: {0} ", Ryan_centre.ToDate(adultHighest));
                Console.WriteLine("highest child attendance: {0}", Ryan_centre.ToDate(childHighest));
                Console.WriteLine("Month of least revenue: {0}", Ryan_centre.ToDate(MonthLowestRev));
                Console.WriteLine("Amount of revenue in {0}: {1}", MonthConverted, amountOfleastRev);


                Console.WriteLine();

                Console.WriteLine("");
                Console.ReadKey();











            }
                return i;
            }
            

        
    }
     
}





