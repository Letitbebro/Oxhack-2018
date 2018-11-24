import matplotlib.pyplot as plt 

x=int(input('How many did you get correct?'))
y=int(input('How many did you get wrong?'))
# x-coordinates of left sides of bars  
left = [1, 2] 
  
# heights of bars 
height = [x, y] 
  
# labels for bars 
tick_label = ['true', 'false']
  
# plotting a bar chart 
plt.bar(left, height, tick_label = tick_label, 
        width = 0.8, color = ['blue', 'cyan']) 
  
# naming the x-axis 
plt.xlabel('Boolean') 
# naming the y-axis 
plt.ylabel('Score') 
# plot title 
plt.title('Financial Test Score') 
  
# function to show the plot 
plt.show() 

