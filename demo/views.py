from django.shortcuts import render

# Create your views here.


def index(request):
    return render(request, "index.html")


def demo(request):
    return render(request, "demo.html")


def check_neviezd(request):
    return render(request, "check_people.html")


def parthners(request):
    return render(request, "parthners.html")


def pay(request):
    return render(request, "pay_money.html")