import tkinter as tk
from tkhtmlview import HTMLText, RenderHTML
import customtkinter
from tkinter import scrolledtext as st
import tempfile,os
from time import strftime
import webbrowser
import pymysql.cursors
import os,sys
sys.path.append("..") #this is importent when you import some thing in other folder
from tkcalendar import DateEntry
from tkinter import CENTER, Label,Entry,Spinbox,Button,END,Frame,Tk,Toplevel
from PIL import Image, ImageTk # pip install pillow
from tkinter import ttk, messagebox
import pymongo
connection_url="mongodb://localhost:27017/"

client=pymongo.MongoClient(connection_url)
client.list_database_names()
database_name="agencetk"
student_db=client[database_name]
a=student_db.list_collection_names()
collection_name="client"
collection=student_db[collection_name]
 
# collection.insert_one(document)
class Register:
    """
    if you dont put self behind eny image will not import in others folder \n
    # this class for enregister client into data base
    """
    def __init__(self, root ): # default constructor and root is a tkinter class object
        customtkinter.set_appearance_mode("light")  # Modes: system (default), light, dark
        customtkinter.set_default_color_theme("dark-blue")  # Themes: blue (default), dark-blue, green
        self.root = root
        scr_width=self.root.winfo_screenwidth()/2+50
        scr_height=self.root.winfo_screenheight()/2+130
        self.root.geometry("%ix%i+200+100"% (scr_width,scr_height)) # Setting width
        self.root.title("Registration Window")
        self.root.resizable(width=False, height=False)# self.root.resizable(width=False, height=False)
        self.root.config(bg="beige",)

       
        scr_width=root.winfo_screenwidth()
        scr_height=root.winfo_screenheight()
        frame1=Frame(self.root,bg="beige")
        frame1.place(x=10,y=10,width=scr_width/2-20,height=scr_height*0.65)
        frame2=Frame(self.root)
        frame2.place(x=800,y=10,width=700,height=500)

        #***********Row1***********
        noml=customtkinter.CTkLabel(frame1,text="NOM du passageur اسم المسافر", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=50,y=100)
        nom=customtkinter.CTkEntry(frame1,placeholder_text="Nom ...",text_font=("times new roman",15),fg_color="white",text_color="black")
        nom.place(x=50,y=130,width=scr_width/6) 
        cmb_depart=ttk.Combobox(frame1,font=("times new roman",16), state="readonly", justify=CENTER)
        cmb_depart["values"]=("matin","soir")
        cmb_depart.place(x=370,y=130,width=scr_width/8)
        cmb_depart.current(0)
        #***********Row2***********
      
        
        telel=customtkinter.CTkLabel(frame1,text="Numero Telephone الهاتف", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=50,y=170)
        tele=Spinbox(frame1,from_=0,to=50000000000000,font=("times new roman",15))
        tele.place(x=50,y=200,width=scr_width/8) 
        

        numL=customtkinter.CTkLabel(frame1,text="NUMERO chaise رقم المقعد", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=370,y=170)
        num=ttk.Combobox(frame1,font=("times new roman",13),state="readonly", justify=CENTER)
        num["values"]=("1"," 2"," 3"," 4","  5"," 6","7","8","9","10","12","13","14","15")
        num.place(x=370,y=200,width=50) 
        num.current(0) 
#reloadfunction
            
        def reload():
            self.root.destroy()
            os.system("py enclient.py")
        #***********Row3***********
        directioinl=customtkinter.CTkLabel(frame1,text="DIRECTION الوجهة", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=50,y=240)
        cmb_dir=ttk.Combobox(frame1,font=("times new roman",13), state="readonly", justify=CENTER)
        cmb_dir["values"]=("Selection","noikchott","atar","noidibou","nema")
        cmb_dir.place(x=50,y=270,width=scr_width/8) 
        cmb_dir.current(0)
        bus_numl=customtkinter.CTkLabel(frame1,text="numero bus رقم الباص", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=50,y=300)

        cmb_bus_num=customtkinter.CTkEntry(frame1,text_color="black", text_font=("times new roman",15),fg_color="white")
     
        cmb_bus_num.place(x=50,y=340,width=150) 
  
        datel=customtkinter.CTkLabel(frame1,text="Date now تاريخ اليوم", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=370,y=240)
        date=DateEntry(frame1,selectmode='day',font=("times new roman",15),fg="black",bg="white")
        date.place(x=370,y=270,width=scr_width/8) 

        #***********Row4***********

        prixl=customtkinter.CTkLabel(frame1,text="prix De Ticket", text_font=("times new roman", 15, "bold"),bg_color="white",fg_color="white").place(x=250,y=310)
        prix=customtkinter.CTkEntry(frame1,text_color="black", text_font=("times new roman",15),fg_color="white")
        prix.place(x=300,y=340,width=90)
        cmb_prix=ttk.Combobox(frame1,font=("times new roman",13), state="readonly", justify=CENTER)
        cmb_prix["values"]=("✅","❌")
        cmb_prix.place(x=400,y=340,width=50)
        cmb_prix.current(0)
        prix.insert(END,"5000")
        tele.delete(0,END)
        num.delete(0,END)
        cmb_dir.current(0)
        
        text_ear=st.ScrolledText(frame2,width=40,height=20)
        text_ear.place(x=50,y=50)
 
        def clear():
            nom.delete(0,END)
            tele.delete(0,END)
            num.delete(0,END)
            cmb_dir.current(0)
            cmb_prix.current(0)
      
     
#==================================================================

        def register_data():
            """test if the user enter  only the number 
            in telephone and numero chaise"""
            numVal=int(num.get())
            teleVal=tele.get()
            if nom.get()==""  or teleVal=="" or  cmb_dir.get()=="Selection"  or prix.get()=="" or num.get()=="":
                messagebox.showerror("Error", "tous les champs sont obligatoire", parent=root)
            else:
                try:
                        if teleVal.isdigit():
                            n=numVal
                          
                            t=tele.get() 
                        else: 
                            messagebox.showerror("Error", "numero du chaise ou numero de telephone doit etre des nombre", parent=self.root)
                        
                        document={
                            "depart":cmb_depart.get()
                            ,"bus_no": cmb_bus_num.get() ,"imprimer":"✔"
                            ,"nom": nom.get()
                            ,"numero":n
                            ,"telephone":t
                            ,"direction": cmb_dir.get()
                            ,"prix":prix.get()
                            ,"date":str(date.get_date())
                            ,"payer": cmb_prix.get()
                            ,"emploiyer":"1"
                            }
                        collection.insert_one(document)
                        clear()
                        # else :
                        #     clear()
                         

                        

                except Exception as es:
                    messagebox.showerror("Error", f"Error due to: {str(es)}", parent=root)

        # btn1=customtkinter.CTkButton(master=self.root,text="حالة المقاعد",text_font=(15),    command=chaise,width=scr_width/8, height=scr_height/18,text_color="black", compound="right",hover_color="dimgray",fg_color="darkkhaki")
        # btn1.place(x=450,y=400)
        # customtkinter.CTkButton(master=root,command=register_data,bg_color="systembuttonface",text="تسجيل",text_font=15, text_color="black",width=scr_width/8, height=scr_height/18, compound="right",hover_color="dimgray",fg_color="darkkhaki").place(x=100,y=400)
        btn1=customtkinter.CTkButton(master=self.root,text="enregistrer",text_font=(15),    command=register_data,width=scr_width/8, height=scr_height/18,text_color="black", compound="right",hover_color="dimgray",fg_color="darkkhaki")
        btn1.place(x=100,y=400)      
      

root=customtkinter.CTk()
obj=Register(root)
root.mainloop()
