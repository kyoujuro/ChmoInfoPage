import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.datasets import load_iris
from sklearn.linear_model import LinearRegression


data = load_iris()
df = pd.DataFrame(data.data, columns=data.feature_names)
model = LinearRegression()

X = df.iloc[:, 0][data.target==0].values.reshape(-1, 1)
y = df.iloc[:, 1][data.target==0].values
model.fit(X, y)
LinearRegression(copy_X=True, fit_intercept=True, n_jobs=None, normalize=False)
print(model.coef_)
print(model.intercept_)
