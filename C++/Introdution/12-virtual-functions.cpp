// virtual function

// stu
/**
 - input
 name age marks(6)
 - out
 name age sum id
 */
// pro
/**
 - input
 name age publications
 -output
 name age publications id(new line ????)
 */

#include <iostream>
#include <string>

using namespace std;

static int StudentId = 0;
static int ProfessorId = 0;

class Person
{
    public:
        string name;
        int age;

        virtual void getdata() {
            cin >> name;
            cin >> age;
        }
        virtual void putdata() {
            cout << name << " " << age << " ";
        }
};

class Student : public Person
{
    public:
        int marks[6];
        int id;

        Student() {
            StudentId ++;
        }

        void getdata() {
            Person::getdata();
            for (int i = 0; i < 6; ++i) {
                cin >> marks[i];
            }
            id = StudentId;
        }

        void putdata() {
            Person::putdata();
            cout << this->sum() << " " << id << endl;
        }

        int sum() {
            int sum = 0;

            for (int i = 0; i < 6; ++i) {
                sum += marks[i];
            }

            return sum;
        }
};

class Professor : public Person
{
    public:
        int publications;
        int id;

        Professor() {
            ProfessorId ++;
        }

        void getdata() {
            Person::getdata();
            cin >> publications;
            this->id = ProfessorId;
        }

        void putdata() {
            Person::putdata();
            cout << publications << " " << id << endl;
        }
};

int main(){

    int n, val;
    cin>>n; //The number of objects that is going to be created.
    Person *per[n];

    for(int i = 0;i < n;i++){
        cin>>val;

        if(val == 1){
            // If val is 1 current object is of type Professor
            per[i] = new Professor;
        }
        else per[i] = new Student; // Else the current object is of type Student

        per[i]->getdata(); // Get the data from the user.
    }

    for(int i=0;i<n;i++)
        per[i]->putdata(); // Print the required output for each object.

    return 0;

}
