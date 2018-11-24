import matplotlib.pyplot as plt 
  
# defining labels 
statistics = ['Correct', 'Wrong'] 
  
# portion covered by each label 
slices = [3, 7] 
  
# color for each label 
colors = ['b', 'c'] 
  
# plotting the pie chart 
plt.pie(slices, labels = statistics, colors=colors,  
        startangle=90, shadow = True, explode = (0, 0.1), 
        radius = 1.2, autopct = '%1.1f%%') 
  
# plotting legend 
plt.legend() 
  
# showing the plot 
plt.show() 
