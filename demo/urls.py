from django.urls import path
from demo import views

urlpatterns = [
    path('', views.index),
    path('demo', views.demo),
    path('check_neviezd', views.check_neviezd),
    path('parthners', views.parthners),
    path('pay_money', views.pay),
]