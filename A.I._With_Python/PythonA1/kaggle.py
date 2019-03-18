

import matplotlib as mpl
import nltk

import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
import seaborn as sns
sns.set(style="white", context="talk")
from collections import Counter
from IPython.display import display

train = pd.read_csv('train.csv')
test = pd.read_csv('test.csv')

print("Train data Shape: ", train.shape)
print("Test Data Shape", test.shape)

print(train.head())

plt.style.use(style='ggplot')
plt.rcParams['figure.figsize'] = (10 , 6)

print ("\n")
print(train.SalePrice.describe())

print("Skew is: ", train.SalePrice.skew())
plt.hist(train.SalePrice, color='blue')
plt.show()
print ("\n")

target = np.log(train.SalePrice)
print("\n Skew is:", target.skew())
plt.hist(target, color= 'blue')
plt.show()
print ("\n")

numeric_features = train.select_dtypes(include=[np.number])
corr = numeric_features.corr()


print(corr['SalePrice'].sort_values(ascending=False) [:5], '\n')
print(corr['SalePrice'].sort_values(ascending=False)[-5:])

print ("\n")

plt.scatter(x=train['GarageArea'],y=target)
plt.ylabel('Sale Price')
plt.xlabel('Garage Area')
plt.show()

train = train[train['GarageArea'] < 1200]

plt.scatter(x=train['GarageArea'],y=np.log(train.SalePrice))
plt.xlim(-200,1600)
plt.ylabel('Sale Price')
plt.xlabel('Garage Area')
plt.show()


print ("\n")
nulls = pd.DataFrame(train.isnull().sum().sort_values(ascending=False)[:25])
nulls.columns = ['Null Count']
nulls.index.name= 'Feature'

print(nulls)


print ("\n")

categoricals = train.select_dtypes(exclude=[np.number])
print(categoricals.describe())


print ("\n")

print("origional: \n")
print(train.Street.value_counts(),"\n")

train['enc_street'] = pd.get_dummies(train.Street, drop_first=True)
test['enc_street'] = pd.get_dummies(train.Street,drop_first=True)



print ("\n")

print("encoded \n")
print(train.enc_street.value_counts())


print ("\n")

condition_pivot = train.pivot_table(index='SaleCondition', values='SalePrice',aggfunc=np.median)
condition_pivot.plot(kind='bar',color='blue')
plt.xlabel('Sale Condition')
plt.ylabel('Median Sale Price')
plt.xticks(rotation=0)
plt.show()

def encode(x): return 1 if x == 'Partial' else 0
train['enc_condition'] = train.SaleCondition.apply(encode)
test['enc_condition'] = test.SaleCondition.apply(encode)

condition_pivot = train.pivot_table(index='enc_condition', values='SalePrice', aggfunc=np.median)
condition_pivot.plot(kind='bar',color='blue')
plt.xlabel('Encoded Sale Condition')
plt.ylabel('Median Sale Price')
plt.xticks(rotation=0)
plt.show()


sns.pairplot(train, x_vars=['LotArea','LotShape','GrLivArea','FullBath'], y_vars="SalePrice", height=7, aspect=0.7)
data = train.select_dtypes(include=[np.number]).interpolate()
#
 #sum(data.isnull().sum !=0
print(sum(data.isnull().sum() != 0))

y = np.log(train.SalePrice)
X = data.drop(['SalePrice','Id'], axis=1)

X_train, X_test,y_train,y_test = train_test_split(X,y, random_state=42, test_size=.33)

lr = linear_model.LinearRegression()

model = lr.fit(X_train,y_train)

print("R^2 is: \n",model.score(X_test,y_test))


print ("\n")

predictions = model.predict(X_test)

print('RMSE is: \n', mean_squared_error(y_test,predictions))

actual_values = y_test
plt.scatter(predictions,actual_values,alpha=.75, color='b')
plt.xlabel('Predicted Price')
plt.ylabel('Actual Price')
plt.title('Linear Regression Model')
plt.show()

submission = pd.DataFrame()

submission['Id'] = test.Id

feats = test.select_dtypes(include=[np.number]).interpolate()

predictions = model.predict(feats)

final_predictions = np.exp(predictions)

print("origional predictions are: \n", predictions[:10],"\n")
print("Final predictions are: \n", final_predictions[:10])

submission['LotArea'] = final_predictions

print(submission.head())

submission.to_csv('submission_Kaggle.csv',index='false')

print(submission.shape)
print(actual_values.shape)
print(submission)