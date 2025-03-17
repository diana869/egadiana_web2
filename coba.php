import numpy as np
import matplotlib.pyplot as plt
X = 2 * np.random.rand(100, 1)
y = 2 + 3 * X + np.random.randn(100,1)
plt.subplot(111)
plt.scatter(X,y)
plt.title('Data Points')
plt.legend(['Random Data'])
plt.show()