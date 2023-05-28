import sys,os,customtkinter
from tkinter import simpledialog
from time import gmtime, strftime
import customtkinter as cus
from tkinter import*
from PIL import Image, ImageTk, ImageDraw # pip install pillow
from tkinter import messagebox
from datetime import *
from math import * 
import webbrowser
 
class index:
    def __init__(self, root ): # default constructor and root is a tkinter class object
         
        self.root = root
        scr_width=self.root.winfo_screenwidth()
        scr_height=self.root.winfo_screenheight()
        self.root.title("System de voyage et transport")
        self.root.geometry("%ix%i+0+0"% (scr_width,scr_height)) # Setting width
        self.root.resizable(0, 0)
        # self.root.config(bg="darksalmon",)
       
        def Exit():
            sure = messagebox.askyesno("Exit","Are you sure you want to exit?", parent=self.root)
            if sure == True:
                self.root.destroy()               
        self.root.protocol("WM_DELETE_WINDOW", Exit)

      #***********Content Window***********
        # self.bg_img=Image.open(imagePath()+"bus.png")
        # # self.bg_img=Image.open("../images/bus.png")
        # self.bg_img=self.bg_img.resize((1420, 650), Image.Resampling.LANCZOS)
        # self.bg_img=ImageTk.PhotoImage(self.bg_img)
        # self.lbl_bg=Label(self.root, image=self.bg_img).place(x=0, y=0,relwidth=1,relheight=1)  
        # #***********Creating Menu***********
        scr_width=root.winfo_screenwidth()
        scr_height=root.winfo_screenheight()
        def reload():
            self.root.withdraw()
            os.system("py main.py")
        
        M_Frame=Label(self.root, font=("times new roman", 20), bg = "cornsilk")
        M_Frame.place(x=0, y=0, width = scr_width, height = scr_height/8)
        btn_mes=customtkinter.CTkButton( self.lbl_bg,text_color="black",hover_color="darkslategrey",text="الرسائل", text_font=("times new roman",15)  , command=message)
        btn_mes.place(x=400, y=5, width=scr_width/8, height=scr_height/18)   

        # btn_chf=customtkinter.CTkButton(M_Frame,text_color="white",text="reload", text_font=("times new roman",15),bg_color="white",fg_color="green",cursor="hand2", command=reload)
        # btn_chf.place(x=10, y=5,width=scr_width/8, height=scr_height/18)  
        
        btn_cln=customtkinter.CTkButton( self.lbl_bg,text_color="black",hover_color="darkslategrey",text="المسافرين", text_font=("times new roman",15),bg_color="white",fg_color="cornsilk",cursor="hand2", command=client)
        btn_cln.place(x=850, y=5,width=scr_width/8, height=scr_height/18)  
        btn_reg=customtkinter.CTkButton( self.lbl_bg,text_color="black",hover_color="darkslategrey",text="الباص", text_font=("times new roman",15),bg_color="white",fg_color="cornsilk",cursor="hand2", command=buss)
        
        btn_reg.place(x=600, y=5,width=scr_width/8, height=scr_height/18)  
          
  
    #---------------------------------------------------
        def clientBusMat():
            op=simpledialog.askstring("Input","entrer le numero du buss",parent=self.root)
            if (op):
                my_w =customtkinter.CTk()
                Show_Bus(my_w,op,"matin" )
                my_w.mainloop()
                
        def clientBussr():
            
            op=simpledialog.askstring("Input","entrer le numero du buss",parent=self.root)
            if (op):

                my_w =customtkinter.CTk()
                Show_Bus(my_w,op,"soir" )
                my_w.mainloop()
        
        def MessBus():
                op=simpledialog.askstring("Input","entrer le numero du buss",parent=self.root)
                
                # self.root.destroy()
                if(op):
                        
                    my_w =customtkinter.CTk()
                    Show_Bus_Mess(my_w,op )
                    my_w.mainloop()
        btn3=cus.CTkButton(self.root,hover_color="darkslategrey",command=clientBusMat,text="حالة باص المسافرين\n في الصباح",text_color="black", text_font=("times new roman",15,"bold"),fg_color="bisque",bg_color="white", cursor="hand2")
        btn3.place(x=360,y=630,width=200)
        btn3=cus.CTkButton(self.root,hover_color="darkslategrey",command=clientBussr,text="حالة باص المسافرين\n في المساء",text_color="black", text_font=("times new roman",15,"bold"),fg_color="bisque",bg_color="white", cursor="hand2")
        btn3.place(x=600,y=630,width=200)
        btn3=cus.CTkButton(self.root,hover_color="darkslategrey",command=MessBus,text="حالة باص \nالرسائل",text_color="black", text_font=("times new roman",15,"bold"),fg_color="bisque",bg_color="white", cursor="hand2")
        btn3.place(x=850,y=630,width=200)
        #***********clock***********
        
#=============================================================================
    
    def logout(self):
        op=messagebox.askyesno("Confirm", "Do you really want to logout?", parent=self.root)
        if op==True:
            self.root.destroy()

    def exit_(self):
        op=messagebox.askyesno("Confirm", "Do you really want to Exit?", parent=self.root)
        if op==True:
            self.root.destroy()
     
# # # # if __name__=="__main__":
root=Tk()
obj=index(root)
root.mainloop()