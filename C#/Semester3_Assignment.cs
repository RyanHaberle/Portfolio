using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace A101094993
{
    class Program
    {
        static void Main(string[] args)
        {
            try
            {
                BoundedBag<string> b = new BoundedBag<string>("ShoppingList", 10);
                b.insert("apple");
                b.insert("eggs");
                b.insert("milk");
                b.saveBag("C:/test/mybag.txt");
                BoundedBag<string> c = new BoundedBag<string>("ShoppingList", 10);
                c.loadBag("C:/test/mybag.txt");
                Console.WriteLine(c.remove());
                Console.WriteLine(c.remove());
                Console.WriteLine(c.remove());
                
            }
            catch (BagEmptyException)
            {
                Console.WriteLine("No more items remain in the bag, unable to remove.");
            }
            catch (BagFullExcepion)
            {
                Console.WriteLine("No more room in the bag, The bag is full!");
            }
            Console.ReadKey();
            }

        public interface Bag<T> where T : class
        {
            T remove();
            void insert(T item);
            string getName();
            bool isEmpty();
            bool isFull();
            int getSize();
            void loadBag(string path);
            void saveBag(string path);
        }

        public class BoundedBag<T> : Bag<T> where T : class
        {
            private string bagName; // the name of the bag 
            private int size; // max size of the bag 
            private int lastIndex;
            private T[] items;
            private Random rnd;
          
            public BoundedBag(string name, int size)
            {
                bagName = name;
                this.size = size;
                rnd = new Random();
                lastIndex = -1;
                items = new T[size];
            }
///METHODS///////////////////////////////////////////////////////////////////////////////////METHODS//////////////////////////////////////////////////////////////////////////////METHODS/////////////////////////////////////////////////////
            public void insert(T item)
            {
                if (lastIndex >= size-1)
                {
                    throw new BagFullExcepion(string.Format("The bag is full, cannot add more items."));
                }
                else
                {
                    lastIndex++;
                    items[lastIndex] = item;
                }
                // throws FullBagException if necessary
            }

            public string getName()
            {
                return bagName;
            }

            public bool isEmpty()
            {
                if (lastIndex < 0)
                {
                    return true;
                }
                else return false;
            }

            public int getSize()  // works do not touch
            {
                int count;
                for (count = 0; count < items.Length; count++)
                {
                    if (items[count] != null)
                    {
                        count++;
                    }
                }
                return count;
            }
            
            public bool isFull()                                
            {
                if (lastIndex >= size)
                {
                    return true;
                }
                else { return false; }                   
            }

            public void loadBag(string path)
            {
                StreamReader readFile = new StreamReader(path);
                string itemsToAdd = readFile.ReadLine();
                while (itemsToAdd != null)
                {
                    T value = (T)Convert.ChangeType(itemsToAdd, typeof(T));
                    insert(value);
                    itemsToAdd = readFile.ReadLine();
                }
                readFile.Close();
            }

            public void saveBag(string path)
            {
                StreamWriter saveFile = new StreamWriter(path);
                for (int count = 0; count <= lastIndex; count++)
                {
                    saveFile.WriteLine(items[count]);
                }
                saveFile.Close();
            }

            public T remove()
            {
                if (isEmpty())
                {
                    throw new BagEmptyException(string.Format("No more items remain in the bag, unable to remove."));
                }
                else
                {
                    int randomItem = rnd.Next(0,lastIndex);
                    T itemTemp = items[randomItem];
                    items[randomItem] = items[lastIndex];
                    lastIndex--;
                    return itemTemp;
                }
            }
        }
    }
//EXCEPTIONS //////////////////////////////////////////////////////////////////////////////EXCEPTIONS////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public class BagEmptyException : Exception
    {
        public BagEmptyException()
        {
        }
        public BagEmptyException(string message)
        : base(message)
        {
        }

    }

    public class BagFullExcepion : Exception
    {
        public BagFullExcepion()
        {
        }
        public BagFullExcepion(string message)
            : base(message)
        {
        }
    }
}
