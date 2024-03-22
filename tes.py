import matplotlib.pyplot as plt

# Ini adalah data Anda
data = [60, 60, 60, 65, 65, 70, 70, 70, 70, 70, 70, 75, 75, 75, 75, 75, 80, 80, 80, 80, 80, 80, 82, 85, 85, 85, 85, 90, 90, 90, 90, 95, 95, 95]

plt.boxplot(data)
plt.title('Boxplot dari Data')
plt.show()