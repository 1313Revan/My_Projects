from tkinter import *

# WINDOW
window = Tk()
window.title("Miles to Km Converter")
window.minsize(width=250, height=150)
window.config(padx=30, pady=30)

# INPUT
input_box = Entry(width=10)
input_box.grid(column=1, row=0)

# LABELS
# miles
mile_text = Label(text="Miles")
mile_text.grid(column=2, row=0)
# is_about
is_about = Label(text="is about")
is_about.grid(column=0, row=1)
# converted number
conversion = Label(text="0")
conversion.grid(column=1, row=1)
# kilometers
kilometer_text = Label(text="Km")
kilometer_text.grid(column=2, row=1)


# BUTTON
def calculate():
    km = (int(input_box.get()) * 1.6)
    conversion["text"] = round(km)


button = Button(text="Calculate", command=calculate)
button.grid(column=1, row=2)

window.mainloop()
